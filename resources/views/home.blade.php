@extends('layouts.frontend')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        {{-- <a class="navbar-brand" href="index.html">Clyde<span>.</span></a> --}}
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container-fluid px-md-0">
                <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img" style="background-image:url(images/bg_2.jpg);">
                        <div class="overlay"></div>
                        <div class="overlay-1"></div>
                    </div>
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                             <span class="subheading">Hello! This is Profile</span>
                            <h1 class="mb-4 mt-3">Hi, I am <span>Apidet</span> This is my favorite work.</h1>
                            <h1 class="mb-4 mt-3">Web <span>Developer</span> </h1>
                        <p><a href="#" class="btn btn-primary">Hire me</a> <a href="{{ route('detali.cv') }}" class="btn btn-primary btn-outline-primary">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter img bg-light" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-suitcase"></span>
                    </div>
                    <div class="text">
                        <strong class="number" data-number="3">0</strong>
                        <span>My Project </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-coffee"></span>
                    </div>
                    <div class="text">
                    <strong class="number" data-number="{{ $post_home->view_count }}">0</strong>
                        <span>Cups of coffee</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-calendar"></span>
                    </div>
                    <div class="text">
                        <strong class="number" data-number="2">0</strong>
                        <span>Years experienced</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.about')
@include('frontend.skills')
@include('frontend.projects')
@include('frontend.contact')


@endsection

