@extends('layouts.app')

@section('content')
    <header class="masthead">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Ons Familie Plaas</h1>
                <hr>
                <p>Your next getaway is with us</p>
                <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="section-heading text-white">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running
                        in no time! All of the templates and themes on Start Bootstrap are open source, free to
                        download, and easy to use. No strings attached!</p>
                    <a class="btn btn-default btn-xl sr-button" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-lg-2"></div>

                <div class="col-lg-4 col-md-4 text-center service-wrapper">
                    <a data-toggle="modal" data-target=".bd-example-modal-lg">
                        <div class="service-box">
                            <i class="fa fa-4x fa-home text-primary sr-icons"></i>
                            <h3>Accommodation</h3>
                            <p class="text-muted">See our available accommodation</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 text-center service-wrapper">
                    <a data-toggle="modal" data-target=".bd-example-modal-lg">
                        <div class="service-box">
                            <i class="fa fa-4x fa-bicycle text-primary sr-icons"></i>
                            <h3>Activities</h3>
                            <p class="text-muted">See what there is to do near by</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @include('modals.accommodation')
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('images/portfolio/fullsize/1.jpg')}}">
                        <img class="img-fluid" src="{{asset('images/portfolio/thumbnails/1.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('images/portfolio/fullsize/2.jpg')}}">
                        <img class="img-fluid" src="{{asset('images/portfolio/thumbnails/2.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('images/portfolio/fullsize/3.jpg')}}">
                        <img class="img-fluid" src="{{asset('images/portfolio/thumbnails/3.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('images/portfolio/fullsize/4.jpg')}}">
                        <img class="img-fluid" src="{{asset('images/portfolio/thumbnails/4.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('images/portfolio/fullsize/5.jpg')}}">
                        <img class="img-fluid" src="{{asset('images/portfolio/thumbnails/5.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{asset('images/portfolio/fullsize/6.jpg')}}">
                        <img class="img-fluid" src="{{asset('images/portfolio/thumbnails/6.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready for your get away experience? Book your accommodation by calling or emailing us</p>
                </div>
                <div class="col-lg-4 offset-lg-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>+27 72 436 8218</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:info@onsfamilieplaas.co.za">info@onsfamilieplaas.co.za</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection