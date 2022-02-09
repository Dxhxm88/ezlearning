@extends('layout.app')

@section('content')
<div class="p-2 mb-4 rounded-3 text-white" style="background-color: #0a6ea0">
    <div class="container-fluid py-5">

        <div class="clearfix">
            <img src="{{ asset('Images/school-logo.png') }}"
                class="col-md-6 float-md-end mb-3 ms-md-3 w-25 rounded-circle" alt="...">
            <h1 class="display-5 fw-bold">EZ LEARNING</h1>
            <p class="col-md-8 fs-4 text-dark fst-italic" style="
            color: #fbe8ce !important;
        ">
                EZ Learning is a system that has been developed for a secondary
                school,
                Sekolah
                Menengah Kebangsaan Zainab 2 (SMK Z2). This system developed will help the school to manage submission
                of
                assignment between teachers and students.
            </p>
        </div>
    </div>
</div>

<h1 class=" p-2 rounded-3 fw-bold fs-3 mb-5 text-white" style="background-color: #0a6ea0">Our Team</h1>

<!-- Three columns of text below the carousel -->
<div class="row" style="text-align: center">
    <div class="col-lg-4">
        <img src="{{ asset('Images/su.jpg') }}" class="card-img-top rounded-circle w-50 shadow mb-3" alt="...">

        <h2>SITI NUR SUZAINIE ROSMI</h2>
        <p class="fst-italic">Web developer</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <img src="{{ asset('Images/ika.jpg') }}" class="card-img-top rounded-circle w-50 shadow mb-3" alt="...">

        <h2>NUR SYAFIKA HASAN</h2>
        <p class="fst-italic">
            Web designer
        </p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">

        <img src="{{ asset('Images/ecah.jpg') }}" class="card-img-top rounded-circle w-50 shadow mb-3" alt="...">

        <h2>SITI NOR AISYAH TAIYANG@ALIAS</h2>
        <p class="fst-italic">Web developer</p>
    </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
@endsection
