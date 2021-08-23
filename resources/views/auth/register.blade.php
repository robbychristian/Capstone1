@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl h-100 align-self-center form-background">
            <h1 class="display-4 text-center font-weight-bold text-uppercase text-white mt-5">Create your account</h1>
            <div class="form-group mt-3 mr-5 ml-5">
                <input type="text" name="" class="form-control form-control-lg" placeholder="First Name"
                    aria-describedby="helpId">
            </div>
            <div class="form-group mt-3 mr-5 ml-5">
                <input type="text" name="" class="form-control form-control-lg" placeholder="Middle Name"
                    aria-describedby="helpId">
            </div>
            <div class="form-group mt-3 mr-5 ml-5">
                <input type="text" name="" class="form-control form-control-lg" placeholder="Last Name"
                    aria-describedby="helpId">
            </div>
            <div class="form-group row mt-3 mr-5 ml-5">
                <input type="text" class="col-6 form-control form-control-lg" placeholder="Address">
                <select class="col-6 form-control form-control-lg" name="" id="">
                    <option>Brgy1</option>
                    <option>Brgy2</option>
                    <option>Brgy3</option>
                </select>
            </div>
            <div class="form-group mt-3 mr-5 ml-5">
                <input type="text" name="" class="form-control form-control-lg" placeholder="Contact"
                    aria-describedby="helpId">
            </div>
            <div class="form-group mt-3 mr-5 ml-5">
                <input type="email" name="" class="form-control form-control-lg" placeholder="Email"
                    aria-describedby="helpId">
            </div>
            <div class="form-group mt-3 mr-5 ml-5">
                <input type="password" name="" class="form-control form-control-lg" placeholder="Password"
                    aria-describedby="helpId">
            </div>
            <div class="form-group mt-3 mr-5 ml-5">
                <input type="password" name="" class="form-control form-control-lg" placeholder="Re-Password"
                    aria-describedby="helpId">
            </div>
            <div class="mx-auto mb-5" style="width: 4rem">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <div class="col-xl">
            <div class="login-img">
                <img src="{{ URL::asset('img/register.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
@endsection
