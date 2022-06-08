@extends("template")

@section("content")
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('assets/images/backgrounds/bg3.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{$service->nom}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class="active">{{$service->nom}}</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Service Details Start-->
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="service-details__right">
                    <div class="service-details__img">
                            <img src="{{$service->image}}" class="service-img"  alt=" {{$service->nom}} ">
                    </div>
                    <div class="service-details__content">
                        <h3 class="service-details__title">{{ $service->nom }}</h3>
                        <p class="service-details__text-1">{{$service->description}}</p>
                    </div>
                    @if ($service->livret)
                    <div class="service-details__bottom">
                        <a href=" {{$service->livret}} " download=" {{$service->nom}}.pdf " target="_blank">
                            <div class="service-details__bottom-icon">
                                <img src="{{asset('assets/images/resources/pdf.png')}}" width="100" alt="">
                                
                            <p class="service-details__bottom-text">Télécharger le livret pour en savoir plus.</p>
                            </div>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-5">
                <div class="service-details__sidebar">
                    <div class="service-details__sidebar-service">
                        <ul class="service-details__sidebar-service-list list-unstyled">
                            @foreach ($services as $item)
                            <li @if ($service->id == $item->id) class="current" @endif><a href="{{route('service', $item->lien)}}">{{$item->nom}} <span class="icon-right-arrow"></span></a></li>
                            @endforeach
                            
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
        </div>
    </div>
</section>
<!--Service Details End-->
@endsection