@extends("template")

@section("content")
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('assets/images/resources/v3.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Devenez vendeur</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class="active">Devenez vendeur</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->
 <section class="contact-page-google-map">
    <div class="container text-center result-card ">
        <i class="fa fa-check-circle text-success"></i>
        <h2>SUCCES</h2>
        <p >Votre compte vendeur a été créé avec succès. </p>  
        <p style="text-align: justify !important">
         
          Un courriel vous a été envoyé à votre adresse email. Veuillez vérifier l'onglet <strong>Promotions</strong> ou <strong>spams</strong> pour Gmail. Et ajouter l'adresse contact@cnic.cm dans votre liste blanche pour recevoir nos courriels dans votre boîte principale. 
          <br>
          <strong>Bienvenue dans la famille CNIC, une aventure palpitante nous attend...</strong> 
        </p>
        <a href=" {{config('app.bo_url')}} "  class="thm-btn contact-one__btn" >Se connecter à l'espace vendeur</a>
        <br>
     </div>
 </section>

@endsection

@section('scripts')
<script src="https://cdn.cinetpay.com/seamless/main.js"></script>
<style>
    .sdk {
        display: block;
        position: absolute;
        background-position: center;
        text-align: center;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<script>
    function changeMethod(method){
        let methode = method;
         $("#methode").val(methode);
    }
</script>
<script>
    function checkout() {
        CinetPay.setConfig({
            apikey: '871892754628b558eec1093.88201837',//   YOUR APIKEY
            site_id: '948897',//YOUR_SITE_ID
            notify_url: "",
            mode: 'PRODUCTION'
        });
        CinetPay.getCheckout({
            transaction_id: Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
            amount: 100,
            currency: 'XAF',
            channels: 'ALL',
            description: 'Test de paiement',   
             //Fournir ces variables pour le paiements par carte bancaire
            customer_name:"Joe",//Le nom du client
            customer_surname:"Down",//Le prenom du client
            customer_email: "down@test.com",//l'email du client
            customer_phone_number: "088767611",//l'email du client
            customer_address : "Nkoabang",//addresse du client
            customer_city: "Yaoundé",// La ville du client
            customer_country : "CM",// le code ISO du pays
            customer_state : "CM",// le code ISO l'état
            customer_zip_code : "1245", // code postal

        });
        CinetPay.waitResponse(function(data) {
            if (data.status == "REFUSED") {
                if (alert("Votre paiement a échoué")) {
                    window.location.reload();
                }
            } else if (data.status == "ACCEPTED") {
                if (alert("Votre paiement a été effectué avec succès")) {
                    window.location.reload();
                }
            }
        });
        CinetPay.onError(function(data) {
            console.log(data);
        });
    }
</script>
@endsection