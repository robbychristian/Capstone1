@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-4 logo-background d-flex" style="height: 95vh; justify-content: center; align-items: center">
            <img src="{{ URL::asset('img/login-img.png') }}" class="img-fluid login-img" alt="">
        </div>
        <div class="col-8 form-background d-flex" style="height:95vh; justify-content: center; align-items: center">
            <div class="shadow bg-white rounded d-flex" style="width: 50rem; height: 70vh; justify-content: center; align-items: center;">
                <div class="row">
                    <div class="col" style="padding: 0 10rem">
                        <h1 class="display-4 text-color font-weight-bold mb-5">Login to your account</h1>
                        <div class="form-group mt-5">
                          <h5 class="text-color font-weight-bold">Email Address:</h5>
                          <input type="text" name="" id="" class="form-control input-box">
                        </div>
                        <div class="form-group">
                          <h5 class="text-color font-weight-bold">Password:</h5>
                          <input type="password" name="" id="" class="form-control input-box">
                        </div>
                        <div class="form-check">
                          <label class="form-check-label text-color font-weight-bold">
                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                            Remember me
                          </label>
                        </div>
                        <div class="mx-auto mt-4" style="width: 35rem">
                            <button type="button" style="font-size: 1.5rem; width: 35rem" class="btn btn-primary">Login</button>
                        </div>
                        <a href=""><h6 class="text-muted text-center mt-5">Forgot your password?</h6></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
