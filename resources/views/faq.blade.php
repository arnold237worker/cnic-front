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
                                    <h4>Interdum et malesuada fames ac ante ipsum</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Maecenas condimentum sollicitudin ligula,</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion last-chiled">
                                <div class="accrodion-title">
                                    <h4>Duis rhoncus orci ut metus rhoncus</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo ligula, vit commodo nisl Sed luctus venenatis pellentesque.</p>
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