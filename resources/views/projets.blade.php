@extends('master')
@section('title', 'projets')
@section('content')
            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Stampee</h2>
                                            <p>Stampee est une application web pour gérer des enchères, offrant création, consultation, et modification facile. Ce projet souligne mes compétences en développement web et innovation.</p>
                                        </div>
                                        <img class="img-fluid" src="{{ asset('assets/img/projet1.png') }}" alt="image projet1" />
                                    </div>
                                </div>
                            </div>
                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Techflow</h2>
                                            <p>techflow est un site interactif pour une agence de marketing digital en utilisant le CMS Framer, mettant en avant une expérience utilisateur enrichie et une gestion de contenu simplifiée.</p>
                                        </div>
                                        <img class="img-fluid" src="{{ asset('assets/img/projet2.png') }}" alt="photo projet2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-6 fw-bolder mb-4">Construisons quelque chose ensemble.</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact">Contactez moi</a>
                    </div>
                </div>
            </section>
        </main>
@endsection
       