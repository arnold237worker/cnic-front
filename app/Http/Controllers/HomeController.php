<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CinetPay\CinetPay;
use Exception;
use App\Models\User;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::get();
        session(['page' => 'home']);
        return view('home', compact("services"));
    }

    public function contact()
    {
        session(['page' => 'contact']);
        return view('contact');
    }

    public function about()
    {
        session(['page' => 'about']);
        return view('about');
    }

    public function vendeur()
    {
        session(['page' => 'vendeur']);
        return view('vendeur');
    }

    public function service($lien)
    {
        session(['page' => 'service']);
        $service = Service::where('lien', $lien)->first();
        $services = Service::get();
        return view('service', compact("service", "services"));
    }

    public function devenir_vendeur(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
            'cpassword' => 'required|same:password|min:6'
        ], [
            'required' => ':attribute est requis',
            'min' => ':attribute doit contenir au moins 6 caractères',
            'unique' => ':attribute a déjà été utilisé'
        ]);

        $inputs = $request->all();

        $api_key = env("API_KEY");
        $site_id = env("SITE_ID");
        $id_transaction = CinetPay::generateTransId(); // Identifiant du Paiement
        $description_du_paiement = sprintf('Vendeur du CNIC ', $id_transaction); // Description du Payment
        $date_transaction = date("Y-m-d H:i:s"); // Date Paiement dans votre système
        $montant_a_payer = 100; // Montant à Payer : minimun est de 100 francs sur CinetPay
        $devise = 'XAF'; // Montant à Payer : minimun est de 100 francs sur CinetPay
        $identifiant_du_payeur = 'info@cnic.cm'; // Mettez ici une information qui vous permettra d'identifier de façon unique le payeur
        $formName = "goCinetPay"; // nom du formulaire CinetPay
        $notify_url = route('notifyUrl'); // Lien de notification CallBack CinetPay (IPN Link)
        $return_url = route('returnUrl'); // Lien de retour CallBack CinetPay
        $cancel_url = ''; // Lien d'annulation CinetPay
        // Configuration du bouton
        $btnType = 2; //1-5xwxxw
        $btnSize = 'large';
        $inputs['payment_id'] = $id_transaction;
        $inputs['password'] = bcrypt($inputs['password']);
        $inputs['type'] = "VENDEUR";
        try {
            $cinetPay = new CinetPay($site_id, $api_key);
            User::create($inputs);
            $cinetPay->setTransId($id_transaction)
                ->setDesignation($description_du_paiement)
                ->setTransDate($date_transaction)
                ->setAmount($montant_a_payer)
                ->setCurrency($devise)
                ->setDebug(true)
                ->setCustom("")
                ->setNotifyUrl($notify_url)
                ->setReturnUrl($return_url)
                ->setCancelUrl("")
                ->displayPayButton($formName, $btnType, $btnSize);
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
    }

    public function return()
    {
        $id_transaction = $_POST['cpm_trans_id'];
        $user = User::where('payment_id', $id_transaction)->first();
        if (isset($_POST['cpm_trans_id']) || isset($_POST['token'])) {
            try {
                $api_key = env("API_KEY");
                $site_id = env("SITE_ID");
                $cinetPay = new CinetPay($site_id, $api_key);
                $cinetPay->setTransId($id_transaction)->getPayStatus();

                if ($cinetPay->isValidPayment()) {
                    session(['PAYMENT_STATUS' => 'SUCCESS']);
                    if($user){
                        $user->statut = "SUCCESS";
                        $user->save();
                    }
                } else {
                    session(['PAYMENT_STATUS' => 'FAILED']);
                    if($user){
                        $user->delete();
                    }
                }
                return redirect()->route('result');
            } catch (Exception $e) {
                dd($e->getMessage());
                session(['PAYMENT_STATUS' => 'FAILED']);
                if($user){
                    $user->delete();
                }
                return redirect()->route('result');
            }
        } else {
            session(['PAYMENT_STATUS' => 'FAILED']);
            if($user){
                $user->delete();
            }
            return redirect()->route('result');
        }
    }

    public function notify()
    {

        $id_transaction = $_POST['cpm_trans_id'];
        $user = User::where('payment_id', $id_transaction)->first();
        if (!empty($id_transaction)) {
            try {
                $apiKey = env('API_KEY'); //Veuillez entrer votre apiKey
                $site_id = env('SITE_ID'); //Veuillez entrer votre siteId

                $cp = new CinetPay($site_id, $apiKey);

                // Reprise exacte des bonnes données chez CinetPay
                $cp->setTransId($id_transaction)->getPayStatus();
                if ($cp->isValidPayment()) {
                    if($user){
                        $user->statut = "SUCCESS";
                        $user->save();
                    }
                    die();
                } else {
                    if($user){
                        $user->delete();
                    }
                    die();
                }
            } catch (Exception $e) {
                if($user){
                    $user->delete();
                }
                echo "Erreur :" . $e->getMessage();
            }
        } else {
            if($user){
                $user->delete();
            }
            die();
        }
    }

    public function result()
    {
        return view('result');
    }
}
