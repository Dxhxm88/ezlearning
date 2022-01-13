@extends('layout.app')

@section('content')
    <div class="p-2 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">EZ-LEARNING SYSTEM</h1>
            <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit consequatur maxime saepe debitis magnam ea, sed culpa assumenda mollitia necessitatibus expedita veritatis quasi harum tempora alias ex, aspernatur nihil!</p>
            {{-- <button class="btn btn-primary btn-lg" type="button">About</button> --}}
        </div>
    </div>

    <h1 class="bg-light p-2 rounded-3 fw-bold fs-3">Our Team</h1>

    <div class="row justify-content-center pt-2">
        <div class="col card-columns mx-auto d-flex justify-content-center ">
            <div class="card shadow w-75">
                <img src="{{ asset('Images/su.jpg') }}" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SITI NUR SUZAINIE ROSMI</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col card-columns mx-auto d-flex justify-content-center">
            <div class="card shadow w-75">
                <img src="{{ asset('Images/ika.jpg') }}" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">NUR SYAFIKA HASAN</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col card-columns mx-auto d-flex justify-content-center">
            <div class="card shadow w-75">
                <img src="{{ asset('Images/ecah.jpg') }}" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SITI NOR AISYAH TAIYANG@ALIAS</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
