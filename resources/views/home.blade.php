@extends("template")

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
                                <p>Claudel Noubissie International Consulting</p>
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
                                <p>Claudel Noubissie International Consulting</p>
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
                                <p>Claudel Noubissie International Consulting</p>
                                <h2>Nul n'entre ici s'il <br>n'est vendeur</h2>
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
                            <span class="icon-strategy"></span>
                        </div>
                        <div class="feature-two__content">
                            <h4 class="feature-two__title"><a href="consumer-product.html">10 ans d'innovation</a>
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
                            <h4 class="feature-two__title"><a href="financial-advice.html">Une communication sur mesure</a></h4>
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
                            <h4 class="feature-two__title"><a href="audit-marketing.html">La vente : notre ADN</a>
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
                    <p> <strong>Croissante</strong>, <strong>Efficacité</strong>, <strong>Rentabilité</strong> </p>
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
                            <img src="{{$item->image}}" style="width: 100%; height: 350px; object-fit: cover" alt="">
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
            {{-- <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__img-box">
                        <div class="feature-one__img">
                            <img src="{{asset('assets/images/resources/s1.jpg')}}" style="width: 100%; height: 278px; object-fit: cover" alt="">
                        </div>
                        <div class="feature-one__icon-box">
                            <div class="feature-one__icon-title-box">
                                <h3 class="feature-one__icon-title"><a href="{{route('service', "conseil-et-assistance-operationnelle")}}">Conseil et assistance opérationnelle</a></h3>
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-strategy"></span>
                            </div>
                        </div>
                        <div class="feature-one__hover">
                            <div class="feature-one__hover-bg"
                                style="background-image: url({{asset('assets/images/resources/s1.jpg')}})">
                            </div>
                            <div class="feature-one__hover-icon">
                                <span class="icon-strategy"></span>
                            </div>
                            <h4 class="feature-one__hover-title"><a href="{{route('service', "conseil-et-assistance-operationnelle")}}">Conseil et assistance opérationnelle</a></h4>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__img-box">
                        <div class="feature-one__img">
                            <img src="{{asset('assets/images/resources/s2.jpg')}}" style="width: 100%; height: 278px; object-fit: cover" alt="">
                        </div>
                        <div class="feature-one__icon-box">
                            <div class="feature-one__icon-title-box">
                                <h3 class="feature-one__icon-title"><a href="{{route('service', "force-de-vente")}}">Force de vente</a></h3>
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-point-of-sale"></span>
                            </div>
                        </div>
                        <div class="feature-one__hover">
                            <div class="feature-one__hover-bg"
                                style="background-image: url({{asset('assets/images/resources/s2.jpg')}})">
                            </div>
                            <div class="feature-one__hover-icon">
                                <span class="icon-point-of-sale"></span>
                            </div>
                            <h4 class="feature-one__hover-title"><a href="{{route('service', "force-de-vente")}}">Force de vente</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__img-box">
                        <div class="feature-one__img">
                            <img src="{{asset('assets/images/resources/s3.jpg')}}" style="width: 100%; height: 278px; object-fit: cover" alt="">
                        </div>
                        <div class="feature-one__icon-box">
                            <div class="feature-one__icon-title-box">
                                <h3 class="feature-one__icon-title"><a href="{{route('service', "claudel-noubissie-business-group")}}">Le Claudel NOUBISSIE Business Group </a></h3>
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-consumer-behavior"></span>
                            </div>
                        </div>
                        <div class="feature-one__hover">
                            <div class="feature-one__hover-bg"
                                style="background-image: url({{asset('assets/images/resources/s3.jpg')}})">
                            </div>
                            <div class="feature-one__hover-icon">
                                <span class="icon-consumer-behavior"></span>
                            </div>
                            <h4 class="feature-one__hover-title"><a href="{{route('service', "claudel-noubissie-business-group")}}">Le Claudel NOUBISSIE Business Group </a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__img-box">
                        <div class="feature-one__img">
                            <img src="{{asset('assets/images/resources/tontine.jpg')}}" style="width: 100%; height: 278px; object-fit: cover" alt="">
                        </div>
                        <div class="feature-one__icon-box">
                            <div class="feature-one__icon-title-box">
                                <h3 class="feature-one__icon-title"><a href="{{route('service', 'tontine-structurelle-africaine')}}">La tontine structurelle Africaine</a></h3>
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-consumer-behavior"></span>
                            </div>
                        </div>
                        <div class="feature-one__hover">
                            <div class="feature-one__hover-bg"
                                style="background-image: url({{asset('assets/images/resources/tontine.jpg')}})">
                            </div>
                            <div class="feature-one__hover-icon">
                                <span class="icon-consumer-behavior"></span>
                            </div>
                            <h4 class="feature-one__hover-title"><a href="{{route('service', 'tontine-structurelle-africaine')}}">La tontine structurelle Africaine</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__img-box">
                        <div class="feature-one__img">
                            <img src="{{asset('assets/images/resources/v3.jpg')}}" style="width: 100%; height: 278px; object-fit: cover" alt="">
                        </div>
                        <div class="feature-one__icon-box">
                            <div class="feature-one__icon-title-box">
                                <h3 class="feature-one__icon-title"><a href="{{route('service', 'formations')}}">Formations</a></h3>
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-consumer-behavior"></span>
                            </div>
                        </div>
                        <div class="feature-one__hover">
                            <div class="feature-one__hover-bg"
                                style="background-image: url({{asset('assets/images/resources/v3.jpg')}})">
                            </div>
                            <div class="feature-one__hover-icon">
                                <span class="icon-consumer-behavior"></span>
                            </div>
                            <h4 class="feature-one__hover-title"><a href="{{route('service', 'formations')}}">Formations</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <!--Feature One Single-->
                <div class="feature-one__single">
                    <div class="feature-one__img-box">
                        <div class="feature-one__img">
                            <img src="{{asset('assets/images/resources/coffret.jpg')}}" style="width: 100%; height: 278px; object-fit: cover" alt="">
                        </div>
                        <div class="feature-one__icon-box">
                            <div class="feature-one__icon-title-box">
                                <h3 class="feature-one__icon-title"><a href="{{route('service', 'coffret-vip')}}">Coffret VIP</a></h3>
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-consumer-behavior"></span>
                            </div>
                        </div>
                        <div class="feature-one__hover">
                            <div class="feature-one__hover-bg"
                                style="background-image: url({{asset('assets/images/resources/coffret.jpg')}})">
                            </div>
                            <div class="feature-one__hover-icon">
                                <span class="icon-consumer-behavior"></span>
                            </div>
                            <h4 class="feature-one__hover-title"><a href="{{route('service', 'coffret-vip')}}">Coffret VIP</a></h4>
                        </div>
                    </div>
                </div>
            </div> --}}
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
                        <img src="{{asset('assets/images/resources/v1.jpg')}}" alt="">
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

<!--Get To Know Start-->
<section class="get-to-know" style="background-color: #edf3f6;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="get-to-know__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">Dr. Claudel Noubissie</h2>
                    </div>
                    <p class="get-to-know__text">Médecin à la base, le docteur Claudel Noubissie est un acteur majeur de la scène
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
                                <img src="{{asset('assets/images/resources/cn.jpg')}}" style="width: 100%; height: 600px; object-fit: cover" alt="">
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
                        <img src="{{asset('assets/images/resources/v2.jpg')}}" class="cnic-img" alt="">
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
                    <div class="about-one__bottom">
                        <div class="about-one__btn-box">
                            <a href="{{route('vendeur')}}" class="thm-btn about-one__btn">Devenez vendeur</a>
                        </div>
                        
                        <div class="main-slider-three__video">
                            <div class="main-slider-three__video-link">
                                <a href="https://www.youtube.com/watch?v=BhFRQGjl1DU"
                                    class="video-popup">
                                    <div class="main-slider-three__video-icon">
                                        <span class="fas fa-play"></span>
                                    </div>
                                </a>
                            </div>
                            <h5 class="main-slider-three__video-text">Regarder</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->
<br/>
@endsection