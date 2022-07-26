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
                        <p class="service-details__text-1">{!! $service->description !!}</p>
                    </div>
                    <div class="about-one__bottom">
                        @if ($service->livret)
                            <div class="about-one__btn-box">
                                <a href="javascript:void(0);" class="thm-btn about-one__btn download-livret" data-toggle="modal" data-target="#myModal">Télécharger le livret</a>
                            </div>
                        @endif
                        @if ($service->video)
                            <div class="about-one__contact">
                                <div class="main-slider-three__video">
                                    <div class="main-slider-three__video-link">
                                        <a href="{{$service->video}}"
                                            class="video-popup">
                                            <div class="main-slider-three__video-icon">
                                                <span class="fas fa-play"></span>
                                            </div>
                                        </a>
                                    </div>
                                    <h5 class="main-slider-three__video-text"><a href="{{$service->video}}"
                                        class="video-popup">Vidéo de présentation </a> </h5>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <br>
                <!-- Modal HTML -->
                <div id="myModal" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Télécharger le livret</h5>
                                <button type="button" class="close btn btn-danger" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="contact-page__form">
                                    <form action="#" id="save-download" method="post" class="comment-one__form ">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Votre nom*" id="nom" required name="nom">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box">
                                                    <input type="email" placeholder="Votre adresse email*" id="email" required name="email">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Votre numéro de téléphone*" required id="telephone"  name="telephone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <button type="submit" id="submit" class="thm-btn comment-form__btn close">Téléchargez maintenant</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <a href="tel:+237693918018">(+237) 693 91 80 18 </a>
                        </div>
                        <br>
                        <div class="service-details__need-help-icon">
                            <span class="fab fa-whatsapp"></span>
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
@section('title')
  {{$service->nom}}
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $(".download-livret").click(function(){
            $("#myModal").modal('show');
        });
        $(".close").click(function(){
            $("#myModal").modal('hide');
        });

        $("#submit").click(function(){
            $("#submit").attr("disabled", "disabled");
            let form = $("#save-download");
            form.validate({
                errorClass: "form-has-error",
                errorElement: "i",
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                }
            });
            if(form.valid()){
                let nom = $("#nom").val();
                let email = $("#email").val();
                let telephone = $("#telephone").val();
                let doc = " {{$service->nom}} "
                let data = {nom: nom, document: doc, email: email, telephone: telephone, _token: "{{ csrf_token() }}"};
                $.ajax({
                    url: "{{route('telechargement')}}",
                    type: "POST",
                    data: data,
                    cache: false,
                    success: function(dataResult){
                        const url = "{{$service->livret}}";
                        const a = document.createElement('a');
                        a.style.display = 'none';
                        a.href=url;
                        a.download=" {{$service->nom}}.pdf";
                        a.target="_blank";
                        document.body.appendChild(a);
                        a.click();
                        window.URL.revokeObjectURL(url);
                        new Noty({
                            type: 'success',
                            text: 'Le livret a été téléchargé avec succès !',
                            timeout: 7000,
                            killer: true
                        }).show();
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
            }else{
                return ;
            }
    })

    });
</script>
@endsection