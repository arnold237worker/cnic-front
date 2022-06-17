<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Claudel Noubissie International Consulting SARL</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Claudel Noubissie International Consulting" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/conult-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/conult.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/noty.css?v1')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/conult-responsive.css')}}" />
    <script src="https://cdn.cinetpay.com/seamless/main.js" type="text/javascript"></script>
</head>

<body>
    {{-- <div class="preloader">
        <img class="preloader__image" width="100" src="{{asset('assets/images/resources/logo.png')}}" alt="CNIC SARL" />
    </div> --}}
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-two clearfix">
            <div class="main-header-two__top clearfix">
                <div class="container">
                    <div class="main-header-two__top-inner clearfix">
                        <div class="main-header-two__top-left">
                            <ul class="list-unstyled main-header-two__top-address">
                                <li>
                                    <div class="text">
                                        <p><a href="#">Page de prospection des vendeurs CNIC SARL</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <!--About One Start-->
        @if ($service)
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="{{$service->image}}" class="cnic-img" alt=" {{$service->nom}} ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <h3 class="section-title__title">{{$service->nom}}</h3>
                            </div>
                            <br>
                            <p class="about-one__right-text"> {{$service->description}} </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!--About One End-->

        <!--contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Enregistrez-vous </h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="{{route('prospect')}}" method="post" class="comment-one__form ">
                                @csrf
                                <input type="hidden" name="user_id" value=" {{$user->id}} ">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Votre nom*" required name="nom">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Votre adresse email*" required name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Votre numéro de téléphone"  name="telephone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Profession*" required name="profession">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Pays*" required name="pays">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-xl-12">
                                        <div class="contact-one__input-box">
                                            <select name="moyen_paiement" id="moyen_paiement" required>
                                                <option value="">Comment souhaitez-vous faire le paiement ?*</option>
                                                <option value="Orange Money">Orange Money</option>
                                                <option value="MTN Mobile Money">MTN Mobile Money</option>
                                                <option value="Ria">Ria</option>
                                                <option value="World Remit">World Remit</option>
                                                <option value="Cash dans un de nos sièges">Cash dans un de nos sièges</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="attentes" required placeholder="Quelles sont vos attentes ?*"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">Enregistrer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact Page End-->


        

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer__bottom">
                    <p class="site-footer__bottom-text">© {{date('Y')}} Copyright CNIC SARL</p>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{route('home')}}" aria-label="logo image"><img src="{{asset('assets/images/resources/logo-white.png')}}" width="155"
                        alt="CNIC SARL" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:noubissieclaudel@cnic237.com">noubissieclaudel@cnic237.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="https://wa.me/+237676423188">
                        (+237) 676 42 31 88  <br> (+237) 693 91 80 18
                        
                        </a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://www.facebook.com/cnicsarl/" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/drclaudelnoubissie?original_referer=https%3A%2F%2Fmaligah.com%2F" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/channel/UC-FwXrDxvr6gj8x6Kgu3Neg" target="_blank"><i class="fab fa-youtube"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">Rechercher</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Faire une recherche dans le site..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{asset('assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('assets/vendors/wow/wow.js')}}"></script>
    <script src="{{asset('assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/vendors/timepicker/timePicker.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-validation-message.js')}}"></script>




    <!-- template js -->
    <script src="{{asset('assets/js/conult.js')}}"></script>
    <script src="{{asset('assets/js/noty.js')}}"></script>

    <script>
        @if ($errors->any())
              var message = "{{ $errors->all()[0] }}"
              new Noty({
                  type: 'error',
                  text: message,
                  timeout: 7000,
                  killer: true
              }).show();
          @endif
    
          @if(session()->has('success'))
          var message = "{{ session('success') }}"
              new Noty({
                  type: 'success',
                  text: message,
                  timeout: 5000,
                  killer: true
              }).show();
          @endif
    </script>
    @yield('scripts')
</body>

</html>