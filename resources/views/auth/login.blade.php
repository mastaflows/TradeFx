@extends('layout.front')
@section('title')
    Login
@endsection
@section('content')
<main>
    <!-- section content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid" data-uk-height-viewport="expand: true">
                <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url(images/in-signin-image.jpg);">

                </div>
                <div class="uk-width-expand@m uk-flex uk-flex-middle">
                    <div class="uk-grid uk-flex-center">
                        <div class="uk-width-3-5@m">
                            <div class="uk-text-center in-padding-horizontal@s">
                               {{--  <a class="uk-logo" href="index.html">
                                    <img src="images/in-lazy.gif" data-src="img/user/header-logo-7aod97.svg" alt="logo" width="130" height="36" data-uk-img="">
                                </a> --}}
                                <p class="uk-text-lead uk-margin-small-top ">Log into your account</p>
                                <!-- login form begin -->

@if (Session::has('success'))
    <div id="success-alert" class="uk-alert uk-alert-success mb-3 fade-in" role="alert" uk-alert>
        <strong>Success!</strong> {{ Session('success') }}
    </div>
    <style>
        /* Add smooth fade-out transition */
        .fade-in {
            opacity: 1;
            transition: opacity 0.5s ease-in-out; /* Adjust transition duration */
        }
        .fade-out {
            opacity: 0;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Set timeout to apply fade-out effect and close the alert
            setTimeout(() => {
                const alert = document.getElementById('success-alert');
                if (alert) {
                    alert.classList.add('fade-out'); // Add fade-out class
                    setTimeout(() => {
                        UIkit.alert(alert).close(); // Close using UIKit's method after transition
                    }, 1000); // Match transition duration (0.5s = 500ms)
                }
            }, 3000); // Duration before fade-out starts
        });
    </script>
@endif


                            @error('email')
                                <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                                    <span class="fs-5"><strong>Errors!</strong> {{ $message }}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                                <form class="uk-grid uk-form" method="POST" action="{{Route('login')}}">
                                    @csrf
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"></span>
                                       {{--  <input class="uk-input uk-border-rounded" id="username" value="" type="text" placeholder="Username"> --}}
                                       <input class="uk-input uk-border-rounded" id="email" value="" type="text" placeholder="Email" name="email" placeholder="name@example.com"
                                       name="email" value="{{ old('email') }}" required>
                                      {{--  <label for="floatingInput">Email address</label> --}}
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="password" value="" type="password" placeholder="Password" required>
                                    </div>
                                    <div class="uk-margin-small uk-width-auto uk-text-small">
                                        <label><input class="uk-checkbox" type="checkbox"> Remember me</label>
                                    </div>
                                    <div class="uk-margin-small uk-width-expand uk-text-small">
                                        <label class="uk-align-right"><a class="uk-link-reset" href="#">Forgot password?</a></label>
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1">
                                        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign in</button>
                                    </div>
                                </form>
                                <!-- login form end -->
                                <p class="uk-heading-line"><span>Or sign in with</span></p>
                                <div class="uk-margin-medium-bottom">
                                    <a class="uk-button uk-button-primary uk-button-small uk-border-rounded color-google" href="#"><i class="fab fa-google uk-margin-small-right"></i>Google</a>
                                    <a class="uk-button uk-button-primary uk-button-small uk-border-rounded uk-margin-small-left color-facebook" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
                                </div>
                                <span class="uk-text-small">Don't have an account? <a href="{{ route('register') }}">Register here</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    </main>
@endsection
