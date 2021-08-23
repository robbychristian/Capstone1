@extends('layouts.app')

@section('content')
    <div class="p-5">
        <div id="carouselId" class="carousel slide" data-ride="carousel" style="height: 75vh">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ URL::asset('img/blue.jpg') }}" alt="First slide" style="width: 100%; height: 75vh">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('img/red.jpg') }}" alt="Second slide" style="width: 100%; height: 75vh">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('img/green.jpg') }}" alt="Third slide" style="width: 100%; height: 75vh">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="bg-kabisig p-5">
        <h1 class="display-4 font-weight-bold mt-5 text-center">
            FEATURES
        </h1>

        <!--First Row Features-->
        <div class="row d-flex mt-5" style="justify-content: center; align-items: center">
            <div class="py-4 px-3 mx-3" style="border-radius: 2.5rem">
                <div class="card card-bg" style="min-height: 20rem; min-width: 20rem; border-radius: 2.5rem">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="py-4 px-3 mx-3" style="border-radius: 2.5rem">
                <div class="card card-bg" style="min-height: 20rem; min-width: 20rem; border-radius: 2.5rem">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="py-4 px-3 mx-3" style="border-radius: 2.5rem">
                <div class="card card-bg" style="min-height: 20rem; min-width: 20rem; border-radius: 2.5rem">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Second Row Features-->
        <div class="row d-flex mt-5" style="justify-content: center; align-items: center">
            <div class="py-4 px-3 mx-3" style="border-radius: 2.5rem">
                <div class="card card-bg" style="min-height: 20rem; min-width: 20rem; border-radius: 2.5rem">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="py-4 px-3 mx-3" style="border-radius: 2.5rem">
                <div class="card card-bg" style="min-height: 20rem; min-width: 20rem; border-radius: 2.5rem">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="py-4 px-3 mx-3" style="border-radius: 2.5rem">
                <div class="card card-bg" style="min-height: 20rem; min-width: 20rem; border-radius: 2.5rem">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="m-5 row">
        <div class="col d-flex" style="justify-content: center; align-items: center;" id="img-logo">
            <img src="{{ URL::asset('img/kabisig_logo.png') }}" class="img-fluid kabisig-logo" alt=""
                style="height: 50vh; width: 50vh">
        </div>
        <div class="col d-flex" style="justify-content: center; align-items: center;">
            <div class="row">
                <div class="col" style="justify-content: center; align-items: center">
                    <h1 class="display-3 font-weight-bold text-color text-center">Download KaBisig's APK Now!</h1>
                    <div class="mx-auto mt-5" style="width: 16rem;">
                        <button type="button" class="btn btn-primary" style="font-size: 3rem">Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
