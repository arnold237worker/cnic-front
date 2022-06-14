<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CinetPay\CinetPay;
use Exception;
use App\Models\User;
use App\Models\Service;
use Mail;
use App\Models\Abonnement;

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

    public function enregistrer_vendeur(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required|min:6',
            'cpassword' => 'required|same:password|min:6'
        ], [
            'required' => ':attribute est requis',
            'min' => ':attribute doit contenir au moins 6 caractères',
            'unique' => ':attribute a déjà été utilisé'
        ]);

        $inputs = $request->all();
        $inputs['password'] = bcrypt($inputs['password']);

        try{
            $user = User::where('email', $inputs['email'])->first();
            if($user){
                if($user->type != "ADMIN"){
                    return response()->json($user);
                }else{
                    return response()->json("Cette adresse email est éjà utilisé pour un compte administateur", 400);
                }
            }
            $inputs['type'] = "VENDEUR";
            $user = User::create($inputs);
            return response()->json($user);
        }catch(Exception $e){
            return response()->json($e->getMessage(), 500);
        }
        
    }

    public function supprimer_vendeur($id){
        try{
            $user = User::find($id);
            if($user){
                $user->delete();
            }
            return response()->json('Compte vendeur supprimé');
        }catch(Exception $e){
            return response()->json($e->getMessage(), 500);
        }
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
        $id_transaction = CinetPay::generateTransId(); 
        $description_du_paiement = sprintf('Vendeur du CNIC ', $id_transaction); 
        $date_transaction = date("Y-m-d H:i:s"); 
        $montant_a_payer = 100; 
        $devise = 'XAF'; 
        $identifiant_du_payeur = 'info@cnic.cm'; 
        $formName = "goCinetPay"; 
        $notify_url = route('notifyUrl'); 
        $return_url = route('returnUrl');
        $cancel_url = ''; 
        // Configuration du bouton
        $btnType = 2; 
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
        $ids = explode('_', $id_transaction );
        $user_id = $ids[0];
        $user = User::find($user_id);
        if (!empty($id_transaction)) {
            try {
                $apiKey = config("cinetpay.api_key"); //Veuillez entrer votre apiKey
                $site_id = config("cinetpay.site_id"); //Veuillez entrer votre siteId

                $cp = new CinetPay($site_id, $apiKey);

                // Reprise exacte des bonnes données chez CinetPay
                $cp->setTransId($id_transaction)->getPayStatus();
                if ($cp->isValidPayment()) {
                    print "notify";
                    if($user){
                        //update user status
                        $user->statut = "SUCCESS";
                        $user->save();

                        //Register abonnement
                        $abonnement = new Abonnement();
                        $abonnement->code = uniqid();
                        $abonnement->expired_at = date('Y-m-d H:i:s', strtotime('+1 year'));
                        $abonnement->user_id = $user->id;
                        $abonnement->save();

                        $data = [
                            "nom" => $user->nom,
                            "email" => $user->email
                        ];

                        Mail::send('emails.registration', $data, function ($message) use ($data) {
                            $message->to($data['email'], $data['nom'])->subject("Inscription au CNIC");
                            $message->from('contact@cnic.cm', "CNIC SARL");
                        });
                    }
                    die();
                } else {
                    die();
                }
            } catch (Exception $e) {
                print($e->getMessage());
                echo "Erreur :" . $e->getMessage();
            }
        } else {
            print("transaction id not found");
            die();
        }
    }

    public function result()
    {
        return view('result');
    }
}
