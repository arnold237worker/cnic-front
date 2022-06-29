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
                        <h2 class="section-title__title">Pourquoi devenir vendeur ?</h2>
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
                        <br/>
                        <div class="main-slider-three__video">
                            <div class="main-slider-three__video-link">
                                <a href="https://www.youtube.com/watch?v=TOUX3stbGIs"
                                    class="video-popup">
                                    <div class="main-slider-three__video-icon">
                                        <span class="fas fa-play"></span>
                                    </div>
                                </a>
                            </div>
                            <h5 class="main-slider-three__video-text">Regarder la vidéo</h5>
                        </div>
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
                    <h3 class="contact-one__founder"><span>Frais d'adhésion :</span> 10.000 FCFA (25€ hors du Cameroun)   </h3>
                    <h3 class="contact-one__founder"><span>Validité :</span> 12 mois  </h3>
                    <p>Les moyens de paiement disponibles</p>
                    <div class="contact-one__bottom">
                        <div class="contact-one__bottom-img">
                            <a href="javascript:void(0)" onclick="changeMethod('OM')"><img src="{{asset('assets/images/resources/om.jpg')}}" class="paiement_img"  alt=""></a>
                            <a href="javascript:void(0)" onclick="changeMethod('MOMO')"><img src="{{asset('assets/images/resources/momo.jpg')}}" class="paiement_img"  alt=""></a>
                            <a href="javascript:void(0)" onclick="changeMethod('VISA')"><img src="{{asset('assets/images/resources/visa.png')}}" class="paiement_img"  alt=""></a>
                        </div>
                        <div class="contact-one__bottom-img">
                            <a href="javascript:void(0)" onclick="changeMethod('VISA')"><img src="{{asset('assets/images/resources/master.png')}}" class="paiement_img"  alt=""></a>
                            {{-- <a href="javascript:void(0)" onclick="changeMethod('VISA')"><img src="{{asset('assets/images/resources/paypal.png')}}" class="paiement_img"  alt=""></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-one__right">
                    <div class="contact-one__form-box">
                        <h3>Vos informations personnelles</h3>
                        <br>
                        <form method="post" action=" {{route('devenir-vendeur')}} " class="contact-one__form " id="becomeSellerForm">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" required placeholder="Votre nom complet *" name="nom" id="nom" >
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="email" required placeholder="Votre adresse email*" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="text" name="phone" required placeholder="Numéro de téléphone *" id="phone" >
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input id="country_selector" required  type="text" name="pays"> 
                                    </div>
                                </div>
                                {{-- <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Votre adresse compléte" name="adresse" id="adresse">
                                    </div>
                                </div> --}}
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="password" placeholder="Mot de passe *" class="password" required name="password" id="password">
                                        <span style="font-size:12px"><input type="checkbox" id="toggle"> <span id="hide-show">Afficher mots de passe</span> </span>  
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="password" placeholder="Confirmer mot de passe *" class="password" required name="cpassword" id="cpassword">
                                    </div>
                                </div>
                                
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Code vendeur. Exemple: VCxxxxxx (Facultatif)" name="code_prospection_vendeur" id="code_prospection_vendeur" >
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <select name="methode" id="methode" required>
                                            <option value="">Comment souhaitez-vous payer votre souscription ?*</option>
                                            <option value="mobile">Paiement mobile</option>
                                            <option value="carte">Carte bancaire</option>
                                            {{-- <option value="paypal">Paypal</option> --}}
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="token" id="token">
                                
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
<script src="https://checkout.stripe.com/checkout.js"> </script> 
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
            $(this).is(':checked') ? $('.password').attr('type', 'text') : $('.password').attr('type', 'password');
        });

        $("#country_selector").countrySelect({
            defaultCountry: "cm",
            defaultStyling:"inside"

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
                let pays = $("#country_selector").val();
                let email = $("#email").val();
                let phone = $("#phone").val();
                let methode = $("#methode").val();
                let password = $("#password").val();
                let cpassword = $("#cpassword").val();
                let code_prospection_vendeur = $("#code_prospection_vendeur").val();
                let data = {nom: nom, email: email, code_prospection_vendeur: code_prospection_vendeur, phone: phone, methode: methode, password: password, cpassword: cpassword, pays: pays, _token: "{{ csrf_token() }}"};
                if(methode == "mobile"){
                    paiementMobile(data);
                }
                if(methode == "carte"){
                    paiementCarte(data);
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
            description: 'Abonnement vendeur CNIC'

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
                console.log(data);
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

    function paiementCarte(user){
        var handler = StripeCheckout.configure({
            key: "{{config('services.stripe.published')}}", // your publisher key id
            locale: "auto",
            currency: "eur",
            token: function(token) {
                $("#token").val(token.id);
                $("#submit").attr("disabled", "disabled");
                $("#becomeSellerForm").submit();
            }
        });
        handler.open({
            name: 'vendeurs CNIC',
            description: 'Abonnement vendeur CNIC',
            amount: 25 * 100,
            email: user.email
        });
    }
</script>
@endsection