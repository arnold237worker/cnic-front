@extends("template")

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
                    <p class="work-together__right-text mb-1">Claudel Noubissie International Consulting Sarl (CNIC Sarl) est un cabinet de conseil spécialisé en Conseil et stratégie opérationnelle. Notre équipe intervient dans l’opérationnalisation des objectifs de communication, marketing et de lobbying de votre entreprise pour des résultats performants.</p>
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
                    <a href="{{route('vendeur')}}" class="thm-btn cta-one__btn">Devenez Vendeur</a>
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
<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="testimonial-one-map"
        style="background-image: url(assets/images/shapes/testimonial-one-map.png)"></div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Témoignages</span>
            <h2 class="section-title__title">Ce qu'ils disent sur le CNIC</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-one__carousel owl-theme owl-carousel">
                    <div class="testimonial-one__single">
                        <p class="testimonial-one__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </p>
                        <p class="testimonial-one__text">
                            La vente au CNIC me permet de générer entre 400.000 FCFA et 1.000.000F de commissions par mois depuis le début de mon aventure en novembre 2021. Si vous êtes audacieux, aimer les challenges et surtout persévérant alors vous ferez faire beaucoup mieux que moi.
                        </p>
                        <div class="testimonial-one__author">
                            <div class="testimonial-one__author-img">
                                <img src="{{asset('assets/images/partner/t04.png')}}" alt="Ruther Ford TSIMENE">
                            </div>
                            <div class="testimonial-one__author-details">
                                <h4 class="testimonial-one__author-name">Ruther Ford TSIMENE</h4>

                            </div>
                        </div>
                        <div class="testimonial-one__quote-icon">
                            <img src="{{asset('assets/images/icon/quote-icon.png')}}" alt="">
                        </div>
                    </div>
                    <!--Testimonial One Single-->
                    <div class="testimonial-one__single">
                        <p class="testimonial-one__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </p>
                        <p class="testimonial-one__text">Le CNIC pour moi est une maison familiale qui permet à ses enfants d’impacter en grandissant .</p>
                        <div class="testimonial-one__author">
                            <div class="testimonial-one__author-img">
                                <img src="{{asset('assets/images/partner/t02.png')}}" alt="Saurelle NYOMA">
                            </div>
                            <div class="testimonial-one__author-details">
                                <h4 class="testimonial-one__author-name">Saurelle NYOMA</h4>

                            </div>
                        </div>
                        <div class="testimonial-one__quote-icon">
                            <img src="{{asset('assets/images/icon/quote-icon.png')}}" alt="">
                        </div>
                    </div>
                    <!--Testimonial One Single-->
                    <div class="testimonial-one__single">
                        <p class="testimonial-one__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </p>
                        <p class="testimonial-one__text">Duis rhoncus orci utedn metus rhoncus, non is dictum
                            purus bibendum. Suspendisse id orci sit amet justo interdum hendrerit sagittis.</p>
                        <div class="testimonial-one__author">
                            <div class="testimonial-one__author-img">
                                <img src="{{asset('assets/images/partner/t03.png')}}" alt="">
                            </div>
                            <div class="testimonial-one__author-details">
                                <h4 class="testimonial-one__author-name">Arnold FOSSO</h4>

                            </div>
                        </div>
                        <div class="testimonial-one__quote-icon">
                            <img src="{{asset('assets/images/icon/quote-icon.png')}}" alt="">
                        </div>
                    </div>
                    <!--Testimonial One Single-->
                    <div class="testimonial-one__single">
                        <p class="testimonial-one__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </p>
                        <p class="testimonial-one__text">Duis rhoncus orci utedn metus rhoncus, non is dictum
                            purus bibendum. Suspendisse id orci sit amet justo interdum hendrerit sagittis.</p>
                        <div class="testimonial-one__author">
                            <div class="testimonial-one__author-img">
                                <img src="{{asset('assets/images/partner/t01.png')}}" alt="">
                            </div>
                            <div class="testimonial-one__author-details">
                                <h4 class="testimonial-one__author-name">Arnold FOSSO</h4>

                            </div>
                        </div>
                        <div class="testimonial-one__quote-icon">
                            <img src="{{asset('assets/images/icon/quote-icon.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->

<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
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