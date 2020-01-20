@extends('layouts.app')
@section('content')

                        
<div class="limiter">
        <div class="container-login100" style="background-image: url('images/asw.jpg');">
            <div class="wrap-login100 p-t-190 p-b-30">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
                    <div class="login100-form-avatar">
                        <img src="images/ert.png" alt="AVATAR">
                    </div>

                    <span class="login100-form-title p-t-20 p-b-45">
                        <b style="color:red;">Visual</b> Jambi  <br>
                        <b style="font-family: Trebuchet MS;"><i>"Media <b style="color:red;">Jambi</b> Teraktual"</i></b>    
                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
                        <input class="input100" type="text" name="email" placeholder="E-Mail Address">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    @if (Route::has('password.request'))        
                    <div class="text-center w-full p-t-25 p-b-230">
                        <a href="{{ route('password.request') }}" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                    @endif
                  <!--  <div class="text-center w-full">
                        <a class="txt1" href="#">
                            Create new account
                            <i class="fa fa-long-arrow-right"></i>                      
                        </a>
                    </div>-->
                </form>
            </div>
        </div>
    </div>
@endsection
