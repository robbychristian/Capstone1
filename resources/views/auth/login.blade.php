@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-4 col-lg-3 col-md-2 col-sm-1 col-xs-1 logo-background d-flex" style="height: 95vh; justify-content: center; align-items: center">
            <img src="{{ URL::asset('img/login-img.png') }}" class="img-fluid login-img" alt="">
        </div>
        <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11 col-xs-12 form-background d-flex justify-content-center" style="height:95vh;">
            <div class="shadow bg-white rounded d-flex h-75 justify-content-center align-self-center">
                <div class="col w-100 align-self-center" style="padding: 0 5rem;">
                    <h1 class="display-6 text-color font-weight-bold mb-4">Login to your account</h1>
                    <form>

                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword">
                        </div>

                        <div class="form-check">
                            <label class="form-check-label text-color" style="font-weight: 500">
                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                Remember me
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">Login</button>

                    </form>

                    <a href="">
                        <h6 class="text-muted text-center mt-5">Forgot your password?</h6>
                    </a>

                </div>
            </div>
        </div>
    </div>


@endsection