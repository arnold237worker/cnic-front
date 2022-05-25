@extends("template")

@section("content")
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('assets/images/backgrounds/bg3.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Nom du service</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class="active">Nom du service</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Service Details Start-->
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="service-details__sidebar">
                    <div class="service-details__sidebar-service">
                        <ul class="service-details__sidebar-service-list list-unstyled">
                            <li><a href="{{route('service')}}">Conseil et assistance opérationnelle <span class="icon-right-arrow"></span></a></li>
                            <li><a href="{{route('service')}}">Force de Vente <span class="icon-right-arrow"></span></a></li>
                            <li><a href="{{route('service')}}">Claudel NOUBISSIE Business Group <span class="icon-right-arrow"></span></a></li>
                            <li><a href="{{route('service')}}">La tontine structurelle Africaine <span class="icon-right-arrow"></span></a></li>
                            <li><a href="{{route('service')}}">Formations <span class="icon-right-arrow"></span></a></li>
                            <li class="current"><a href="{{route('service')}}">Coffret VIP <span class="icon-right-arrow"></span></a></li>
                        </ul>
                    </div>
                    <div class="service-details__need-help">
                        <div class="service-details__need-help-bg" style="background-image: url({{asset('assets/images/resources/v1.jpg')}})">
                        </div>
                        <h2 class="service-details__need-help-title">Nous sommes disponibles H24</h2>
                        <div class="service-details__need-help-icon">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="service-details__need-help-contact">
                            <a href="https://wa.me/+237676423188">(+237) 676 42 31 88 </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="service-details__right">
                    <div class="service-details__img">
                        <img src="{{asset('assets/images/resources/s1.jpg')}}" alt="">
                    </div>
                    <div class="service-details__content">
                        <h3 class="service-details__title">Conseil et assistance opérationnelle apportés aux entreprises, organisations et particulier</h3>
                        <p class="service-details__text-1">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s.</p>
                        <p class="service-details__text-2">It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum take a look at our round. When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                    </div>
                    <div class="service-details__bottom">
                        <div class="service-details__bottom-icon">
                            <img src="{{asset('assets/images/resources/pdf.png')}}" width="100" alt="">
                        </div>
                        <p class="service-details__bottom-text">Télécharger le livret pour en savoir plus sur le service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Service Details End-->
@endsection