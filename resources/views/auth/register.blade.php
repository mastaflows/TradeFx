@extends('layout.front')
@section('title')
    Register
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
                                <a class="uk-logo" href="#">
                                    {{-- <img src="front/logo3.png" data-src="front/logo3.png" alt="logo" width="180" height="92" data-uk-img=""> --}}
                                </a>
                                <p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom fs-sm">Sign Up</p>
                                <!-- login form begin -->
                                <form class="uk-grid uk-form"  method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="name" value="{{ old('name') }}" type="text" placeholder="name" name="name" required>
                                        @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="username" value="{{ old('username') }}" type="text" placeholder="Username" name="username" required>
                                        @error('username')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="email" value="{{ old('email') }}" type="text" placeholder="email" name="email" required>
                                        @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-phone fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="phone" value="{{ old('phone') }}" type="text" placeholder="phone" name="phone" required>
                                        @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    <div  class="uk-margin-small uk-width-1-1 uk-inline">
                                        <label for="uk-Input">Select Contry</label>
                                        <select class="uk-select uk-border-rounded" name="country" class="form-control" required>
                                            @foreach ($countries as $country)
                                            <option value="{{$country->name}}">{{$country->name}}</option>
                                        @endforeach
                                        </select>
                                        @error('Country')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                      </div>
                                   <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-user-plus fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="referral" value="{{ old('referral') }}" type="text" placeholder="referral" name="referral">
                                        @error('referral')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="password" value="" type="password" placeholder="Password" name="password" required>
                                        @error('Password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="password" value="" type="Password" placeholder="Confirm_Password" name="password_confirmation" required>
                                        @error('confirm_password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    </div>
                                    <div class="uk-margin-small uk-width-expand uk-text-small">
                                        <label class="uk-align-right uk-link-reset">Already have an account?</label>
                                    </div>
                                    <div class="{{-- uk-margin-small uk-width-1-1  --}}uk-form-custom">
                                        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">SUBMIT</button>
                                    </div>
                                </form>
                                <!-- login form end -->
                                <p class="uk-heading-line"><span>Or sign in with</span></p>
                                <div class="uk-margin-medium-bottom">
                                    <a class="uk-button uk-button-primary uk-button-small uk-border-rounded color-google" href="#"><i class="fab fa-google uk-margin-small-right"></i>Google</a>
                                    <a class="uk-button uk-button-primary uk-button-small uk-border-rounded uk-margin-small-left color-facebook" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
                                </div>
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


