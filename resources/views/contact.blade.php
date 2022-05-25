@extends("template")

@section("content")
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('assets/images/backgrounds/bg2.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Contactez-nous</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class="active">Contactez-nous</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Page Google Map Start-->
<section class="contact-page-google-map">
   <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.648281509419!2d11.506043014262726!3d3.885347549270342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf6978dd80bb%3A0x8a83cd846cbe981a!2sY_BUILDING!5e0!3m2!1sen!2scm!4v1653334688383!5m2!1sen!2scm" class="contact-page-google-map__one"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
    </div>
</section>
<!--Contact Page Google Map End-->

<!--Contact Page Details Start-->
<section class="contact-page-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="contact-page-details__left">
                    <h3 class="contact-page-details__title">Nos contacts</h3>
                    <div class="contact-page-details__content">
                        <div class="contact-page-details__content-img">
                            <img src="{{asset('assets/images/resources/c1.jpg')}}" style="width: 270px; height: 292px; object-fit: cover" alt="">
                        </div>
                        <div class="contact-page-details__content-text-box">
                            <p class="contact-page-details__content-text-1">Pour toutes vos préoccupations, remarques ou suggestions vous pouvez nous laisser un message.</p>
                            <p class="contact-page-details__content-text-2">Nous prendrons plaisir à vous répondre dans les plus bref délai.</p>
                            <h2 class="contact-page-details__sign">CNIC</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="contact-page-details__right">
                    <ul class="list-unstyled contact-page-details__list">
                        <li>
                            <span>Appelez-nous</span>
                            <p><a href="https://wa.me/+237676423188" target="_blank">(+237) 676 42 31 88</a> <br> <a href="https://wa.me/+237693918018" target="_blank">(+237) 693 91 80 18</a></p>
                        </li>
                        <li>
                            <span>Adresse e-mail</span>
                            <p><a href="mailto:noubissieclaudel@cnic237.com">noubissieclaudel@cnic237.com</a></p>
                        </li>
                        <li>
                            <span>Nos bureaux</span>
                            <p>Bastos - Yaoundé <br>
                                Y Building, 3ème étage</p>
                        </li>
                    </ul>
                    <div class="contact-page-details__social"><a href="https://www.facebook.com/cnicsarl/" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/drclaudelnoubissie?original_referer=https%3A%2F%2Fmaligah.com%2F" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.youtube.com/channel/UC-FwXrDxvr6gj8x6Kgu3Neg" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page Details End-->

<!--contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Entrer en contact</span>
            <h2 class="section-title__title">Laisser nous un message</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__form">
                    <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Votre nom" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Votre adresse email" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Votre numéro de téléphone" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Objet" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="Entrer votre message"></textarea>
                                </div>
                                <button type="submit" class="thm-btn comment-form__btn">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact Page End-->
@endsection