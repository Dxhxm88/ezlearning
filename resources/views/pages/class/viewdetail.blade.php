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
                @foreach ($classes as $class)
                    <tr>
                        <td>{{ $class->name }}</td>
                        <td>Remove</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
