@extends("template")
@section('title')
CNIC SARL - FAQ
@endsection
@section("content")
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('assets/images/backgrounds/bg3.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>FAQ</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class="active">FAQ</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Service Details Start-->
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="service-details__right">
                    <div class="service-details__faq">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Comment avoir des commissions ou encore comment entrer en possession de ses commissions ?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorsque vous adhérez au programme DEVENEZ VENDEUR, vous avez durant le premier mois, 50% de commission sur chaque produits et/ou services du CNIC que vous vendez. Dès le 2ème mois, les commissions seront de 10%.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Quels sont les différents produits et/ou services que nous devons vendre ?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Les différents produits et services à vendre sont : Toutes les formations du Dr Claudel NOUBISSIE, l’adhésion au Claudel NOUBISSIE Business Group, Le Coffret VIP, Le programme DEVENEZ VENDEUR, les livres du Dr Claudel NOUBISSIE, etc…</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Service Details End-->
@endsection