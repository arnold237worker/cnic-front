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

<!--About One Start-->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img">
                        <img src="{{asset('assets/images/resources/v4.png')}}" style="width: 100%; height: 500px; object-fit: contain" alt="Deveenez vendeur">
                    </div>
                    <div class="about-one__shape">
                        <img src="{{asset('assets/images/resources/v4.png')}}" style="width: 100%; height: 500px; object-fit: contain" alt="Deveenez vendeur">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Rejoindre la CNIC</span>
                        <h2 class="section-title__title">Pourqoui devenir vendeur ?</h2>
                    </div>
                    
                    <div class="about-one__business-start">
                        <div class="about-one__business-start-icon">
                            <span class="icon-verification"></span>
                        </div>
                        <p class="about-one__business-start-text">La vente est un métier noble, respectable, rentable.</p>
                    </div>
                    
                    <br>
                    <p class="about-one__right-text">Le CNIC vous offre un cadre idéal pour développer vos compétences de vendeurs grâce à des formations et des séances de coaching données par des vendeurs expérimentés. <br>Tu peux désormais rejoindre l’équipe des vendeurs du Claudel
                        NOUBISSIE International Consulting (CNIC)
                        <br><br>
                        Une aventure palpitante nous attend…</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->

<!--Contact One Start-->
<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Inscrivez-vous</span>
                        <h2 class="section-title__title">Devenez vendeur</h2>
                    </div>
                    <p class="contact-one__text">Inscrivez-vous en tant que vendeur du Claudel Noubissie International Consulting et accéder à un espace dédié aux vendeurs contenant des formations inédites. </p>
                    <h2 class="contact-one__founder"><span>Frais d'adhésion :</span> 10.000 FCFA (25€ hors du Cameroun)   </h2>
                    <p>Les moyens de paiement disponibles</p>
                    <div class="contact-one__bottom">
                        <div class="contact-one__bottom-img">
                            <a href="javascript:void(0)" onclick="changeMethod('OM')"><img src="{{asset('assets/images/resources/om.jpg')}}" class="paiement_img"  alt=""></a>
                            <a href="javascript:void(0)" onclick="changeMethod('MOMO')"><img src="{{asset('assets/images/resources/momo.jpg')}}" class="paiement_img"  alt=""></a>
                            <a href="javascript:void(0)" onclick="changeMethod('VISA')"><img src="{{asset('assets/images/resources/visa.png')}}" class="paiement_img"  alt=""></a>
                        </div>
                        <div class="contact-one__bottom-img">
                            <a href="javascript:void(0)" onclick="changeMethod('VISA')"><img src="{{asset('assets/images/resources/master.png')}}" class="paiement_img"  alt=""></a>
                            <a href="javascript:void(0)" onclick="changeMethod('VISA')"><img src="{{asset('assets/images/resources/paypal.png')}}" class="paiement_img"  alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-one__right">
                    <div class="contact-one__form-box">
                        <h3>Vos informations personnelles</h3>
                        <br>
                        <form method="post" class="contact-one__form " id="becomeSellerForm">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" required placeholder="Votre nom complet *" name="nom" id="nom" >
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="email" required placeholder="Votre adresse email*" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" name="phone" required placeholder="Votre numéro de téléphone *" id="phone" >
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Votre adresse compléte" name="adresse" id="adresse">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="password" placeholder="Mot de passe *" required name="password" id="password">
                                        <span style="font-size:12px"><input type="checkbox" id="toggle"> <span id="hide-show">Afficher mot de passe</span> </span>  
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="password" placeholder="Confirmer mot de passe *" required name="cpassword" id="cpassword">
                                    </div>
                                </div>
                                
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <select name="methode" id="methode" required>
                                            <option value="">Comment souhaitez-vous payer votre souscription ?*</option>
                                            <option value="mobile">Paiement mobile</option>
                                            <option value="carte">Carte bancaire</option>
                                            <option value="paypal">Paypal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-xl-12">
                                    <a href="javascript:void(0)" id="submit" class="thm-btn contact-one__btn">S'inscrire</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact One End-->

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

    $(document).ready(function(){
         $('#toggle').click(function(){
            $(this).is(':checked') ? $('#password').attr('type', 'text') : $('#password').attr('type', 'password');
        });
    });
    $("#submit").click(function(){
            
            $("#submit").attr("disabled", "disabled");
            let form = $("#becomeSellerForm");
            form.validate({
                errorClass: "form-has-error",
                errorElement: "i",
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                rules : {
                    password : {
                        minlength : 6
                    },
                    cpassword : {
                        minlength : 6,
                        equalTo : "#password"
                    }
                }
            });
            if(form.valid()){
                let nom = $("#nom").val();
                let email = $("#email").val();
                let phone = $("#phone").val();
                let adresse = $("#adresse").val();
                let methode = $("#methode").val();
                let password = $("#password").val();
                let cpassword = $("#cpassword").val();
                let data = {nom: nom, email: email, phone: phone, adresse: adresse, methode: methode, password: password, cpassword: cpassword, _token: "{{ csrf_token() }}"};
                if(methode == "mobile"){
                    paiementMobile(data);
                }
                if(methode == "carte"){
                    paiementCarte();
                }
                if(methode == "paypal"){
                    paiementPaypal();
                }
            }else{
                return ;
            }
    })


    function paiementMobile(data){
        $.ajax({
            url: "{{route('enregistrer-vendeur')}}",
            type: "POST",
            data: data,
            cache: false,
            success: function(dataResult){
                checkout(dataResult);
            },
            error: function(xhr, textStatus, errorThrown){
                new Noty({
                  type: 'error',
                  text: xhr.responseJSON,
                  timeout: 7000,
                  killer: true
              }).show();
            }
        });
    }

    function checkout(user) {
        console.log("id"+user.id);
        let notityUrl = "{{route('notifyUrl')}}";
        CinetPay.setConfig({
            apikey: '{{config("cinetpay.api_key")}}',//   YOUR APIKEY
            site_id: '{{config("cinetpay.site_id")}}',//YOUR_SITE_ID
            notify_url: notityUrl,
            return_url: "",
            mode: 'PRODUCTION'
        });
        CinetPay.getCheckout({
            transaction_id: user.id+"_"+Math.floor(Math.random() * 100000000).toString(), // YOUR TRANSACTION ID
            amount: 100,
            currency: 'XAF',
            channels: 'MOBILE_MONEY',
            description: 'Abonnement vendeur CNIC',   
             //Fournir ces variables pour le paiements par carte bancaire
            customer_name: user.nom,//Le nom du client
            customer_surname:"",//Le prenom du client
            customer_email: user.email,//l'email du client
            customer_phone_number: user.phone,//l'email du client
            customer_address : user.adresse,//addresse du client
            customer_city: "Yaoundé",// La ville du client
            customer_country : "CM",// le code ISO du pays
            customer_state : "CE",// le code ISO l'état
            customer_zip_code : "06510", // code postal

        });
        CinetPay.waitResponse(function(data) {
            if (data.status == "REFUSED") {
                new Noty({
                  type: 'error',
                  text: "Le paiement a échoué !",
                  timeout: 7000,
                  killer: true
                }).show();
                window.location.reload();
            } else if (data.status == "ACCEPTED") {
                new Noty({
                  type: 'success',
                  text: "Votre compte a été créé avec succès !",
                  timeout: 7000,
                  killer: true
                }).show();
                window.location.assign("/payement/result")
                
            }
        });
        CinetPay.onError(function(data) {
            console.log(data);
        });
    }
</script>
@endsection