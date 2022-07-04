@extends("template")
@section('title')
    CNIC SARL - Qui sommes-nous ?
@endsection
@section("content")
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('assets/images/backgrounds/bg3.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Qui sommes-nous ?</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class="active">Qui sommes-nous ?</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Work Together Start-->
<section class="work-together">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="work-together__left wow slideInLeft" data-wow-delay="100ms"
                    data-wow-duration="2500ms">
                    <div class="work-together__img-box">
                        <div class="work-together__img-1">
                            <img src="{{asset('assets/images/resources/about7.jpg')}}" style="width: 374px; height: 494px; object-fit: cover" alt="CNIC SARL">
                            <div class="work-together__img-2">
                                <img src="{{asset('assets/images/resources/about2.jpg')}}" style="width: 374px; height: 494px; object-fit: contain"  alt="CNIC SARL">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-6">
                <div class="work-together__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Qui sommes-nous ?</span>
                        <h2 class="section-title__title">CNIC SARL</h2>
                    </div>
                    <p> <strong>Croissance</strong>, <strong>Efficacité</strong>, <strong>Rentabilité</strong> </p>
                    <p class="work-together__right-text mb-1">Claudel NOUBISSIE International Consulting Sarl (CNIC Sarl) est un cabinet de conseil spécialisé en conseil et stratégie opérationnelle. Notre équipe intervient dans l’opérationnalisation des objectifs de communication, marketing et de lobbying de votre entreprise pour des résultats performants.</p>
                    <h5 class="txt-primary mb-1">Nos résultats sont le fruit de notre expertise</h5>
                    
                    <p class="work-together__right-text">Toute action est mesurée et analysée en amont, afin de mettre sur pied une stratégie adaptée, qui répond à vos besoins de croissance. Nous implémentons pour vous des leviers de croissance,  qui permettront d’optimiser le positionnement de vos produits ou services à l’échelle international. </p>
                    {{-- <ul class="list-unstyled work-together__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Conseils aux entreprises.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Assistance opérationnelle aux entreprises.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Assistance des organisations.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Lobbying.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Elaboration des stratégies Marketing.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Communication.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Gestion des relations publiques.</p>
                            </div>
                        </li>
                    </ul> --}}
                    <div class="main-slider-three__video">
                        <div class="main-slider-three__video-link">
                            <a href="https://www.youtube.com/watch?v=BhFRQGjl1DU"
                                class="video-popup">
                                <div class="main-slider-three__video-icon">
                                    <span class="fas fa-play"></span>
                                </div>
                            </a>
                        </div>
                        <h5 class="main-slider-three__video-text">Vidéo de présentation</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Work Together End-->
<!--CTA One Start-->
<section class="cta-one cta-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner">
                    <h2 class="cta-one__title">Rejoignez la grande communauté <br> des vendeurs du CNIC</h2>
                    <a href="{{route('vendeur')}}" class="thm-btn cta-one__btn">Rejoignez-Nous dès maintenant</a>
                    <div class="cta-one__shape wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                        <img src="{{asset('assets/images/shapes/cta-one-shape.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->
<!--Real World Start-->
<section class="real-world">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="real-world__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">CNIC SARL</span>
                        <h2 class="section-title__title">Equipe</h2>
                    </div>
                    <p class="real-world__left-text">Nous possédons une équipe disponible, performante et compétente, orientée RESULTAT. De plus, l’équipe possède une excellente capacité d’intervention opérationnelle et technique sur chaque mission attribuée.</p>
                    
                </div>
            </div>
            <div class="col-xl-4">
                <div class="real-world__middle">
                    <div class="real-world__img">
                        <img src="{{asset('assets/images/resources/equipe.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="real-world__counter-box">
                    <ul class="list-unstyled real-world__counter">
                        <li class="real-world__counter-single">
                            <div class="real-world__counter-content">
                                <p class="real-world__counter-text">Créativité</p>
                            </div>
                            <div class="real-world__counter-icon">
                                <span class="icon-help"></span>
                            </div>
                        </li>
                        <li class="real-world__counter-single">
                            <div class="real-world__counter-content">
                                <p class="real-world__counter-text">Innovation</p>
                            </div>
                            <div class="real-world__counter-icon">
                                <span class="icon-customer-review"></span>
                            </div>
                        </li>
                        <li class="real-world__counter-single">
                            <div class="real-world__counter-content">
                                <p class="real-world__counter-text">Originalité</p>
                            </div>
                            <div class="real-world__counter-icon">
                                <span class="icon-consultant"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Real World End-->
<!--Testimonial Two Start-->
<section class="testimonial-two">
    <div class="testimonial-two__container">
        <div class="testimonial-two-bg-box">
            <div class="testimonial-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{asset('assets/images/backgrounds/bg1.jpg')}})"></div>
        </div>
        <div class="testimonial-two-big-text">Témoignages</div>
        <div class="testimonial-two-shape-1"><img src="{{asset('assets/images/shapes/testimonial-two-shape-1.png')}}" alt="shape1">
        </div>
        <div class="testimonial-two-shape-2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
            <img src="{{asset('assets/images/shapes/testimonial-two-shape-2.png')}}" alt="shape2">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-two__slider">
                        <div class="swiper-container" id="testimonials-two__thumb">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-two__img-holder">
                                        <img src="{{asset('assets/images/partner/t04.png')}}" alt="Ruther Ford TSIMENE">
                                    </div>
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-two__img-holder">
                                        <img src="{{asset('assets/images/partner/t02.png')}}" alt="Saurelle NYOMA">
                                    </div>
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-two__img-holder">
                                        <img src="{{asset('assets/images/partner/t01.png')}}" alt="Daril KANDEU">
                                    </div>
                                </div><!-- /.swiper-slide -->
                            </div><!-- /.swiper-wrapper -->
                        </div>

                        <div class="testimonials-two__main-content">
                            <div class="swiper-container" id="testimonials-two__carousel">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-two__conent-box">
                                            <p class="testimonial-two__text">La vente au CNIC me permet de générer entre 400.000 FCFA et 1.000.000F de commissions par mois depuis le début de mon aventure en novembre 2021. Si vous êtes audacieux, aimer les challenges et surtout persévérant alors vous ferez faire beaucoup mieux que moi.</p>
                                            <div class="testimonial-two__client-details">
                                                <h4 class="testimonial-two__client-name">Ruther Ford TSIMENE</h4>
                                                <span class="testimonial-two__clinet-title">- Vendeur</span>
                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-two__conent-box">
                                            <p class="testimonial-two__text">Le CNIC pour moi est une maison familiale qui permet à ses enfants d’impacter en grandissant .</p>
                                            <div class="testimonial-two__client-details">
                                                <h4 class="testimonial-two__client-name">Saurelle NYOMA</h4>
                                                <span class="testimonial-two__clinet-title">- Vendeuse</span>
                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-two__conent-box">
                                            <p class="testimonial-two__text">Depuis mon entrée au Claudel NOUBISSIE International Consulting (CNIC), j’ai pris le temps de faire mes classes. Aujourd’hui, je parviens grâce aux ventes à me faire un salaire fixe de 500 000 Fcfa et des commissions qui avoisinent des mois, la somme de 900 000 Fcfa. Rejoignez-nous afin qu’ENSEMBLE nous puissions bâtir une entreprise encore plus puissante.</p>
                                            <div class="testimonial-two__client-details">
                                                <h4 class="testimonial-two__client-name">Daril KANDEU</h4>
                                                <span class="testimonial-two__clinet-title">- Vendeur</span>
                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                </div><!-- /.swiper-wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial Two End-->

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

<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Nos partenaires</h2>
        </div>
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "375": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 4
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 5
            },
            "1199": {
                "spaceBetween": 50,
                "slidesPerView": 5
            }
        }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/01.png')}}" alt="startup academy">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/02.png')}}" alt="Startup school">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/03.png')}}" alt="La vitrine school">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/05.png')}}" alt="StartUp Factory">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/04.png')}}" alt="The factory">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/06.png')}}" alt="StartUp Motors">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/07.png')}}" alt="Medics Care">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/08.png')}}" alt="StartUp Cosmetics">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/09.png')}}" alt="StartUp">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/10.png')}}" alt="StartUp">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/11.png')}}" alt="StartUp">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/partner/12.png')}}" alt="StartUp">
                </div><!-- /.swiper-slide -->
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->
@endsection