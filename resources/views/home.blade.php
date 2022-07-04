@extends("template")
@section('title')
    Claudel NOUBISSIE International Consulting SARL
@endsection
@section("content")
<section class="main-slider main-slider-two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
"effect": "fade",
"pagination": {
"el": "#main-slider-pagination",
"type": "bullets",
"clickable": true
},
"navigation": {
"nextEl": "#main-slider__swiper-button-next",
"prevEl": "#main-slider__swiper-button-prev"
},
"autoplay": {
"delay": 5000
}}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/backgrounds/bg3.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <p>Claudel NOUBISSIE International Consulting</p>
                                <h2>Nul n'entre ici s'il <br>n'est vendeur</h2>
                                <a href="{{route('vendeur')}}" class="thm-btn">Devenez Vendeur</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/backgrounds/bg1.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <p>Claudel NOUBISSIE International Consulting</p>
                                <h2>Nul n'entre ici s'il <br>n'est vendeur</h2>
                                <a href="{{route('vendeur')}}" class="thm-btn">Devenez Vendeur</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/backgrounds/bg2.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <p>Claudel NOUBISSIE International Consulting</p>
                                <h2>Ensemble <br>plus puissant</h2>
                                <a href="{{route('vendeur')}}" class="thm-btn">Devenez Vendeur</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="main-slider__nav-two">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>
<!--Main Slider End-->
<!--Feature Two Start-->
<section class="feature-two">
    <div class="feature-two__top">
        <div class="container">
            <div class="feature-two__top-inner">
                <p class="feature-two__top-text">La VENTE, notre LEITMOTIV car qu’importe ce que vous faites dans la vie, vous aurez besoin de vendre.</p>
            </div>
        </div>
    </div>
    <div class="feature-two__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--Feature Two Single-->
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-help"></span>
                        </div>
                        <div class="feature-two__content">
                            <h4 class="feature-two__title"><a href=" {{route('vendeur')}} ">Ensemble on est plus fort</a> 
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <!--Feature Two Single-->
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-consumer-behavior"></span>
                        </div>
                        <div class="feature-two__content">
                            <h4 class="feature-two__title"><a href=" {{route('vendeur')}} ">Une communication sur mesure</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <!--Feature Two Single-->
                    <div class="feature-two__single">
                        <div class="feature-two__icon">
                            <span class="icon-point-of-sale"></span>
                        </div>
                        <div class="feature-two__content">
                            <h4 class="feature-two__title"><a href=" {{route('vendeur')}} ">La vente : notre ADN </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Feature Two End-->


<!--Work Together Start-->
<section class="work-together">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="work-together__left wow slideInLeft" data-wow-delay="100ms"
                    data-wow-duration="2500ms">
                    <div class="work-together__img-box">
                        <div class="work-together__img-1">
                            <img src="{{asset('assets/images/resources/about7.jpg')}}" style="width: 374px; height: 600px; object-fit: cover" alt="CNIC SARL">
                            <div class="work-together__img-2">
                                <img src="{{asset('assets/images/resources/about2.jpg')}}" style="width: 374px; height: 520px; object-fit: contain"  alt="CNIC SARL">
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
                        <h5 class="main-slider-three__video-text"><a href="https://www.youtube.com/watch?v=BhFRQGjl1DU"
                            class="video-popup">Vidéo de présentation </a> </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Work Together End-->

<!--Services One Start-->
<section class="services-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">CE QUE NOUS FAISONS</span>
            <h2 class="section-title__title">Nos Services</h2>
        </div>
        
        <div class="row">
            @foreach ($services as $item)
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__img-box">
                        <div class="feature-one__img">
                            <img src="{{$item->image}}" style="width: 100%; height: 350px; object-fit: cover" alt="{{$item->nom}}">
                        </div>
                        <div class="feature-one__icon-box">
                            <div class="feature-one__icon-title-box">
                                <h3 class="feature-one__icon-title"><a href="{{route('service', $item->lien)}}">{{$item->nom}}</a></h3>
                            </div>
                            {{-- <div class="feature-one__icon">
                                <span class="icon-strategy"></span>
                            </div> --}}
                        </div>
                        <div class="feature-one__hover">
                            <div class="feature-one__hover-bg"
                                style="background-image: url({{$item->image}})">
                            </div>
                            {{-- <div class="feature-one__hover-icon">
                                <span class="icon-strategy"></span>
                            </div> --}}
                            <h4 class="feature-one__hover-title"><a href="{{route('service', $item->lien)}}">{{$item->nom}}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--Services One End-->

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
                        <img src="{{asset('assets/images/resources/equipe.jpg')}}" alt="Equipe du CNIC">
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
                        <img src="{{asset('assets/images/shapes/cta-one-shape.png')}}" alt="Rejoindre le CNIC">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->

<!--Get To Know Start-->
<section class="get-to-know" style="background-color: #edf3f6;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="get-to-know__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">Dr. Claudel NOUBISSIE</h2>
                    </div>
                    <p class="get-to-know__text">Médecin à la base, le docteur Claudel NOUBISSIE est un acteur majeur de la scène
                        économico-socio-culturelle africaine.
                        ENTREPRENEUR, CONFÉRENCIER et FORMATEUR, il contribue au quotidien par ses
                        œuvres à la création d'une nouvelle Afrique, une Afrique forte et indépendante!
                        Auteur de 8 ouvrages à succès vendus à plus de 50.000 exemplaires et traitant différentes
                        thématiques, il soigne des maux avec les mots.</p>

                        <div class="about-one__bottom">
                            <div class="about-one__btn-box">
                                <a href="{{route('biographie')}}" class="thm-btn about-one__btn">Voir plus</a>
                            </div>
                            
                        </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="get-to-know__right">
                            <div class="get-to-know__img-2">
                                <img src="{{asset('assets/images/resources/cn.jpg')}}" style="width: 100%; height: 600px; object-fit: cover" alt="Dr Claudel NOUBISSIE">
                            </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Get To Know End-->




<!--About One Start-->
<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="about-one__img">
                        <a href="https://www.youtube.com/watch?v=TOUX3stbGIs" class="video-popup">
                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/TOUX3stbGIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
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
                    <div class="about-one__bottom">
                        <div class="about-one__btn-box">
                            <a href="{{route('vendeur')}}" class="thm-btn about-one__btn">Devenez vendeur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->

<!--Our Mission Start-->
<section class="our-mission">
    <div class="our-mission-bg-box">
        <div class="our-mission-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url({{asset('assets/images/backgrounds/bg3.jpg')}} )"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="our-mission__inner">
                    <h2 class="our-mission__title">Déjà plus de 1.000 vendeurs <br> à ce jour disponible pour vous servir.</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Our Mission End-->

<!--News One Start-->
<section class="news-one">
    <div class="news-one__container">
        <div class="row">
            <div class="col-xl-12">
                <div class="news-one__carousel owl-theme owl-carousel">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{asset('assets/images/vendeurs/01.jpg')}}" alt="Vendeurs CNIC">
                        </div>
                    </div>
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{asset('assets/images/vendeurs/02.jpg')}}" alt="Vendeurs CNIC">
                        </div>
                    </div>
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{asset('assets/images/vendeurs/03.jpg')}}" alt="Vendeurs CNIC">
                        </div>
                    </div>
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{asset('assets/images/vendeurs/04.jpg')}}" alt="Vendeurs CNIC">
                        </div>
                    </div>
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{asset('assets/images/vendeurs/05.jpg')}}" alt="Vendeurs CNIC">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--News One End-->

<!--News Three Start-->
<section class="news-three">
    <div class="news-three-bg"></div>
    <div class="container">
        <div class="section-title text-center">
            
            <span class="section-title__tagline"></span>
            <h2 class="section-title__title">Découvrez le parcours <br/> nos  meilleurs vendeurs</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/TjGThu_Agh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/g1bFRI5f4qU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/kW0yPZ9YsoY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--News Three End-->
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
<br/>
@endsection