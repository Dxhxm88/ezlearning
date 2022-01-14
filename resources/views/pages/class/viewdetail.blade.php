@extends('layout.appm')

@section('content')
    <div class="p-2 mb-4 bg-light rounded-3">
        <div class="container-fluid">
            <h1 class="display-5 fw-bold">DETAILS CLASS</h1>
        </div>
    </div>

    <div class="cotainer">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ali</td>
                    <td>Remove</td>
                </tr>
                <tr>
                    <td>Abu</td>
                    <td>Remove</td>
                </tr>
                <tr>
                    <td>Ahmad</td>
                    <td>Remove</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
