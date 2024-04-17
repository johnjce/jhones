@extends('front.layouts.app')

@section('content')

    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ asset("storage/$setting->video_url") }}" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="{{ asset("storage/$user?->profile_pic") }}" alt="">
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">{{ $user?->name }}</h1>
                    <h5 class="text-white font-weight-normal mb-3 text-center">En programación, seguridad y sistemas,<br> la eficiencia es mi firma.</h5>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">{{ $user?->job }}</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="{{ asset("storage/$setting->cv_url") }}" target="_blank" class="btn btn-outline-light mr-5">Descarga mi CV</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                                data-src="{{ asset("storage/$setting->video_url") }}" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">La música es el alma hablando.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    @include('front.about.about')
    @include('front.qualification.qualification')
    @include('front.skills.skills')
    @include('front.services.services')
{{--    @include('front.portfolio.portfolio')--}}
    @include('front.testimonial.testimonial')
{{--    @include('front.contact.contact')--}}

    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="{{ $setting->github_url }}"><i class="fab fa-github"></i></a>
                <a class="btn btn-light btn-social mr-2" href="{{ $setting->fb_url }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="{{ $setting->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="#">Politica de privacidad</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Terminos y condiciones</a>
            </div>
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="https://www.jhon.es">jhon.es</a>. Todos los derechos reservados.
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

@endsection
