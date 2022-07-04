@extends("template")

@section("content")
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset('assets/images/resources/cn.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Dr. Claudel NOUBISSIE</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li class="active">Biographie</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News Details Start-->
<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <div class="news-details__content">
                        <h3 class="news-details__title">Biographie du Docteur Claudel NOUBISSIE</h3>
                        <div class="news-details__text-1">
                            
                            <p> Médecin à la base, le docteur Claudel NOUBISSIE est un acteur majeur de la scène
                            économico-socio-culturelle africaine.</p>
                            <p> ENTREPRENEUR, CONFÉRENCIER et FORMATEUR, il contribue au quotidien par ses
                            œuvres à la création d'une nouvelle Afrique, une Afrique forte et indépendante!
                            Auteur de 8 ouvrages à succès vendus à plus de 50.000 exemplaires et traitant différentes
                            thématiques, il soigne des maux avec les mots.</p>
                            <p>
                            Rompu à la tâche et pétri d'expérience, le docteur Claudel NOUBISSIE a dispensé de 2016 à
                            nos jours plus de 600 conférences en Afrique et dans la diaspora. Sans oublier son
                            expertise unique apportée aux universités et aux grandes écoles.</p>
                            <p> Ses interventions originales et différenciées sont reconnues pour leur puissance et leur
                            capacité à tenir en haleine un auditoire. Des conférences dont on se souvient…
                            Le docteur NOUBISSIE est également fondateur de: <br>
                            *le CLAUDEL NOUBISSIE INTERNATIONAL CONSULTING(CNIC-SARL), un cabinet
                            spécialisé en conseil et assistance opérationnelle apportés aux entreprises et aux
                            organisations. <br>
                            Dans une complémentarité objective et stratégique, il apporte en plus aux entreprises et aux
                            organisations, des prestations intellectuelles et du lobbying.
                            Aujourd'hui, le cabinet a une force de vente monumentale, une mine de techniques dans un
                            style "décoiffant". Son effectif croissant est de 1000 vendeurs répartis dans tous les
                            continents. <br>
                            *la STARTUP GROUP SA, est un groupe de 15 entreprises filiales de la STARTUP
                            ACADEMY(compte plus de 5000 membres à nos jours) qui est un ensemble de centres
                            d'incubation ayant comme objectif, la sensibilisation, la formation et l'investissement.
                            *le CLAUDEL NOUBISSIE BUSINESS GROUP(CNBG) & LA TONTINE STRUCTURELLE
                            AFRICAINE, créés en novembre 2021, son objectif est de mettre ENSEMBLE les africains
                            du monde entier pour développer leur continent par des réalisations des projets communs,
                            divers et surtout rentables. <br>
                            Aujourd'hui, le CNBG a un effectif de près de 1000 membres, qui croît au jour le jour.
                            Y <br>
                            *SM(Sur Mesure), est une marque de vêtements et accessoires de mode de qualité,
                            fabriqués en Afrique avec du matériel local. </p>
                           <p> Docteur Claudel NOUBISSIE, médecin atypique, un exemple africain de la détermination!
                            Ses MESSAGES: </p>
                            <p> "Incontournable dans la vente, Incomparable dans les résultats…"
                            "Seuls, nous irons peut-être plus vite…mais ENSEMBLE nous irons sûrement plus loin…"</p>
                            </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <img src=" {{asset('assets/images/resources/cn.jpg')}} " style="width: 100%; height: auto; object-fit: cover" alt="Dr Claudel NOUBISSIE">
            </div>
        </div>
    </div>
</section>
<!--News Details End-->


@endsection
