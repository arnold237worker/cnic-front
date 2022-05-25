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

<!--Contact One Start-->
<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Rejoignez le CNIC</span>
                        <h2 class="section-title__title">Devenez vendeur</h2>
                    </div>
                    <p class="contact-one__text">Inscrivez-vous en tant que vendeur de la Claudel Noubissie International Consulting et accéder à un espace dédié aux vendeurs contenant des formations inédites. </p>
                    <h2 class="contact-one__founder"><span>Frais d'adhésion :</span> 10.000 FCFA </h2>
                    <p>Sélectionner un moyen de paiement</p>
                    <div class="contact-one__bottom">
                        <div class="contact-one__bottom-img">
                            <a href="javascript:void(0)" onclick="changeMethod('OM')"><img src="{{asset('assets/images/resources/om.jpg')}}" class="paiement_img"  alt=""></a>
                            <a href="javascript:void(0)" onclick="changeMethod('MOMO')"><img src="{{asset('assets/images/resources/momo.jpg')}}" class="paiement_img"  alt=""></a>
                            <a href="javascript:void(0)" onclick="changeMethod('VISA')"><img src="{{asset('assets/images/resources/master.png')}}" class="paiement_img"  alt=""></a>
                            <a href="javascript:void(0)" onclick="changeMethod('VISA')"><img src="{{asset('assets/images/resources/visa.png')}}" class="paiement_img"  alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-one__right">
                    <div class="contact-one__form-box">
                        <h3>Vos informations personnelles</h3>
                        <br>
                        <form action="#" class="contact-one__form contact-form-validated"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" required placeholder="Votre nom complet *" name="nom">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="email" required placeholder="Votre adresse email*" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Votre numéro de téléphone (à utiliser pour le paiement)*" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__input-box">
                                        <input type="text" placeholder="Votre adresse compléte" name="adresse">
                                        <input type="hidden"  id="methode" name="methode">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="password" placeholder="Mot de passe" name="password">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-one__input-box">
                                        <input type="password" placeholder="Confirmer mot de passe" name="cpassword">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <button type="submit" class="thm-btn contact-one__btn">S'inscrire</button>
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
   <script>
       function changeMethod(method){
           let methode = method;
            $("#methode").val(methode);
       }
   </script>
@endsection