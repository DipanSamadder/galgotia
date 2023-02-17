@extends('backend.layouts.blank')

@section('content')
<div class="authentication">    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form class="card auth_form" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="header">
                        <img class="logo" src="{{ static_asset('backend/assets/images/logo.svg') }}" alt="">
                        <h5>{{ translation('Sign Up') }}</h5>
                        <span>{{ translation('Register a new membership') }}</span>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="{{ translation('Username') }}" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="{{ translation('Enter Email') }}" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>
                        </div>                        
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="{{ translation('Password') }}" required>
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>                            
                        </div>                       
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="{{ translation('Confirm Password') }}" required>
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>                            
                        </div>
                        <!-- <div class="checkbox">
                            <input id="remember_me" name="" type="checkbox">
                            <label for="remember_me">{{ translation('I read and agree to the') }} <a href="javascript:void(0);">terms of usage</a></label>
                        </div> -->
                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">{{ translation('SIGN UP') }}</button>
                        <div class="signin_with mt-3">
                            <a class="link" href="{{ route('login') }}">{{ translation('You already have a membership') }}?</a>
                        </div>
                    </div>
                </form>
                <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span>{{ translation('Designed by') }} <a href="{{ route('home') }}" target="_blank">{{ config('app.name', 'Multipurpose backend laravel9') }}</a></span>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{ static_asset('backend/assets/images/signup.svg') }}" alt="Sign Up" />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection