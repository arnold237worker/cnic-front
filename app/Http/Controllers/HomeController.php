<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CinetPay\CinetPay;
use Exception;
use App\Models\User;
use App\Models\Service;
use App\Models\UserServiceProspection;
use Mail;
use App\Models\Abonnement;
use App\Models\UserProspect;
use Stripe;

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
        $inputs['type'] = "VENDEUR";
        try {
            $user = User::where('email', $inputs['email'])->first();
            if($user == null){
                $user =  User::create($inputs);
            }

            $stripe = Stripe::charges()->create([
                'source' => $inputs['token'],
                'currency' => 'EUR',
                'amount' => 25 ,
                'description' => 'Abonnement vendeur CNIC'
            ]);

            
            if($stripe['status'] === "succeeded"){
                if($user){
                    //update user status
                    $user->statut = "SUCCESS";
                    $user->code_vendeur = uniqid();
                    $user->save();

                    //Register abonnement
                    $abonnement = new Abonnement();
                    $abonnement->code = uniqid();
                    $abonnement->expired_at = date('Y-m-d H:i:s', strtotime('+1 year'));
                    $abonnement->user_id = $user->id;
                    $abonnement->save();

                    $this->sendMail($user->nom, $user->email);
                }
                return redirect()->route('result')->withSuccess('Votre compte vendeur a été créé avec succès !');
            }

            return back()->withErrors(['message' => 'Le payment de votre abonnement a échoué !']);

        } catch (Exception $ex) {
            print $ex->getMessage();
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
                    if($user){
                        //update user status
                        $user->statut = "SUCCESS";
                        $user->code_vendeur = uniqid();
                        $user->save();

                        //Register abonnement
                        $abonnement = new Abonnement();
                        $abonnement->code = uniqid();
                        $abonnement->expired_at = date('Y-m-d H:i:s', strtotime('+1 year'));
                        $abonnement->user_id = $user->id;
                        $abonnement->save();

                        $this->sendMail($user->nom, $user->email);
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

    public function send_message(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'objet' => 'required',
            'g-recaptcha-response' => 'required'
        ], [
            'required' => ':attribute est requis',
            'recaptcha' => 'La vérification pour les robots est requise'
        ]);

        $input = $request->all();

        $this->sendContactMail($input['name'], $input['email'], $input['telephone'], $input['objet'], $input['message']);

        return back()->withSuccess('Votre message a été envoyé avec succès ! Un administrateur se fera le plaisir de vous répondre.');


    }

    public function prospection($code)
    {
        $user = User::where('code_vendeur', $code)->first();
        if($user){
            $user->vues = $user->vues+1;
            $user->save();
        }
        $service = UserServiceProspection::where('user_id', $user->id)->first();
        return view('prospection', compact('user', 'service'));
    }

    public function prospect(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'email' => 'required',
            'profession' => 'required',
            'attentes' => 'required',
            'pays' => 'required',
            'user_id' => 'required',
            'telephone' => 'required'
        ], [
            'required' => ':attribute est requis'
        ]);

        $inputs = $request->all();
        try {
            UserProspect::create($inputs);
            return back()->withSuccess('Vous avez été enregistré avec succès !');

        } catch (Exception $ex) {
            return back()->withErrors(['message' => $ex->getMessage()]);
        }
    }

    public function sendMail($name, $email)
    {
        $data['From'] = "contact@cnic.cm";
        $data['To'] = $email;
        $data['TemplateId'] = 28266760;
        $data['TemplateModel'] = array(
            "name" => $name,
            "email" => $email
        );

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.postmarkapp.com/email/withTemplate",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Content-Type: application/json",
                "X-Postmark-Server-Token: 8b2671a4-8e82-4d73-af8f-8c4c9b7a37c9"
            ),
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        //dd($response);

        curl_close($curl);

        if ($error != "") {
            return false;
        }

        return true;
    }

    public function sendContactMail($name, $email, $telephone, $objet, $message)
    {
        $data['From'] = "contact@cnic.cm";
        $data['To'] = "contact@cnic.cm";
        $data['TemplateId'] = 28275979;
        $data['TemplateModel'] = array(
            "name" => $name,
            "objet" => $objet,
            "email" => $email,
            "email" => $email,
            "telephone" => $telephone,
            "message" => $message
        );

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.postmarkapp.com/email/withTemplate",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Content-Type: application/json",
                "X-Postmark-Server-Token: 8b2671a4-8e82-4d73-af8f-8c4c9b7a37c9"
            ),
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        //dd($response);

        curl_close($curl);

        if ($error != "") {
            return false;
        }

        return true;
    }
}
