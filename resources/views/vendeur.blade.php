@extends("template")
@section('title')
    CNIC SARL - Devenez vendeur
@endsection
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
            <div class="col-xl-5">
                <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img">
                        <img src="{{asset('assets/images/resources/v4.png')}}" style="width: 100%; height: 500px; object-fit: contain" alt="Deveenez vendeur">
                    </div>
                    <div class="about-one__shape">
                        <img src="{{asset('assets/images/resources/v4.png')}}" style="width: 100%; height: 500px; object-fit: contain" alt="Deveenez vendeur">
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Rejoindre le CNIC</span>
                        <h2 class="section-title__title">Pourquoi devenir vendeur ?</h2>
                    </div>
                    
                    <div class="about-one__business-start">
                        <div class="about-one__business-start-icon">
                            <span class="icon-verification"></span>
                        </div>
                        <p class="about-one__business-start-text">La vente est un métier respectable et surtout RENTABLE.</p>
                    </div>
                    
                    <br>
                    <p class="about-one__right-text">Le CNIC vous offre un cadre idéal pour développer vos compétences de vendeurs grâce à des formations et des séances de coaching données par des vendeurs expérimentés. <br>Vous pouvez désormais rejoindre l’équipe des vendeurs du Claudel
                        NOUBISSIE International Consulting (CNIC)
                        <br><br>
                        Une aventure palpitante nous attend…</p>
                        <br/>
                        <div class="about-one__bottom">
                                <div class="about-one__btn-box">
                                    <a href="{{asset('assets/livret.pdf')}}" download="livret.pdf" class="thm-btn about-one__btn">Livret du vendeur</a>
                                </div>
                                <div class="about-one__contact">
                                    <div class="main-slider-three__video">
                                        <div class="main-slider-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=TOUX3stbGIs"
                                                class="video-popup">
                                                <div class="main-slider-three__video-icon">
                                                    <span class="fas fa-play"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <h5 class="main-slider-three__video-text"><a href="https://www.youtube.com/watch?v=TOUX3stbGIs"
                                            class="video-popup">Regardez la vidéo </a> </h5>
                                    </div>
                                </div>
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
                    <p class="contact-one__text">Inscrivez-vous en tant que vendeur du Claudel NOUBISSIE International Consulting et accédez à un espace dédié aux vendeurs contenant des formations inédites. </p>
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
            <div class="col-xl-6 col-lg-6" id="formulaire-devenir-vendeur">
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
                                        <span style="font-size:12px"><input type="checkbox" id="toggle"> <span id="hide-show">Afficher mot de passe</span> </span>  
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
<!--Case Two Start-->
<section class="case-two">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Résultats de nos</span>
            <h2 class="section-title__title">Meilleurs vendeurs</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="case-two__carousel owl-theme owl-carousel">
                    <!--Case Two Single-->
                    <div class="case-one__single">
                        <div class="case-one__img-box">
                            <div class="case-one__img">
                                <img src="{{asset('assets/images/vendeurs/06.jpg')}}" style="width: 100%; height: 400px; object-fit:contain" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="case-one__single">
                        <div class="case-one__img-box">
                            <div class="case-one__img">
                                <img src="{{asset('assets/images/vendeurs/08.jpg')}}" style="width: 100%; height: 400px; object-fit:contain" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-one__single">
                        <div class="case-one__img-box">
                            <div class="case-one__img"> 
                                <img src="{{asset('assets/images/vendeurs/07.jpg')}}" style="width: 100%; height: 400px; object-fit:contain" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="case-one__single">
                        <div class="case-one__img-box">
                            <div class="case-one__img">
                                <img src="{{asset('assets/images/vendeurs/09.jpg')}}" style="width: 100%; height: 400px; object-fit:contain" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Case Two End-->
<!--CTA One Start-->
<section class="cta-one cta-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner">
                    <h2 class="cta-one__title">Rejoignez la grande communauté <br> des vendeurs du CNIC</h2>
                    <a href="#formulaire-devenir-vendeur" class="thm-btn cta-one__btn">Rejoignez-Nous dès maintenant</a>
                    <div class="cta-one__shape wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <img src="{{asset('assets/images/shapes/cta-one-shape.png')}}" alt="Rejoindre le CNIC">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->
<!--News Three Start-->
<section class="news-three">
    <div class="news-three-bg"></div>
    <div class="container">
        <div class="section-title text-center">
            
            <span class="section-title__tagline">FAQ</span>
            <h2 class="section-title__title">Questions Fréquement <br> Posées</h2>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="service-details__right">
                    <div class="service-details__faq">
                        
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Comment avoir des commissions ou encore comment entrer en possession de ses commissions ?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorsque vous adhérez au programme DEVENEZ VENDEUR, vous avez durant le premier mois, 50% de commission sur chaque produits et/ou services du CNIC que vous vendez. Dès le 2ème mois, les commissions seront de 10%.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Quels sont les différents produits et/ou services que nous devons vendre ?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Les différents produits et services à vendre sont : Toutes les formations du Dr Claudel NOUBISSIE, l’adhésion au Claudel NOUBISSIE Business Group, Le Coffret VIP, Le programme DEVENEZ VENDEUR, les livres du Dr Claudel NOUBISSIE, etc…</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--News Three End-->
<br>

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
            amount: 10300,
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