@extends('layout.wrapperplain') @section('content')
<!--signup-->
<div class="login-logo m-t-30 p-b-5">
    <a href="javascript:void(0)" class="text-center db">
        <img src="{{ runtimeLogoLarge() }}" alt="Home">
    </a>
</div>

<div class="login-box m-t-20">
    <div class="title">
        <h3 class="box-title m-t-10 text-center">Create a new account</h3>
        <div class="text-center  m-b-20 ">
            <small>{{ cleanLang(__('lang.sign_up_for_your_account')) }}</small>
        </div>
    </div>
    <form class="form-horizontal form-material" id="signUpForm">
        <div class="form-group m-t-20">
            <div class="col-xs-12">
                <input class="form-control" type="text" name="first_name" id="first_name"
                    placeholder="First name">
            </div>
        </div>
        <div class="form-group m-t-20">
            <div class="col-xs-12">
                <input class="form-control" type="text" name="last_name" id="last_name"
                    placeholder="Last name">
            </div>
        </div>
        <div class="form-group m-t-20">
            <div class="col-xs-12">
                <input class="form-control" type="text" name="client_company_name" id="client_company_name"
                    placeholder="Company name">
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="password" name="password" id="password"
                    placeholder="Password (minimum 6 characters)">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Confirm password">
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block" id="signupButton"
                    data-button-loading-annimation="yes" data-button-disable-on-click="yes"
                    data-url="{{ url('signup') }}" data-ajax-type="POST" data-loading-target=""
                    data-loading-class="loading" type="submit">{{ cleanLang(__('lang.sign_up')) }}</button>
            </div>
        </div>
        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                <p>{{ cleanLang(__('lang.already_have_an_account')) }}
                    <a href="login" class="text-info m-l-5" data-target="login-forms-login">
                        <b>{{ cleanLang(__('lang.sign_in')) }}</b>
                    </a>
                </p>
            </div>
        </div>
    </form>
</div>

<div class="login-background">
    <div class="x-left">
        <img src="{{ url('/') }}/public/images/login-1.png"  class="login-images" />
    </div>
    <div class="x-right hidden">
        <img src="{{ url('/') }}/public/images/login-2.png" alt="404 - Not found" />
    </div>
</div>


@endsection