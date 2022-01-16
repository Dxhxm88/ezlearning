@extends('layout.appm')

@section('content')
    <div class="p-2 mb-4 bg-light rounded-3">
        <div class="container-fluid">
            <h1 class="display-5 fw-bold">SUBJECT LIST</h1>
        </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-end">
            <a href="{{ route('student.subject.add') }}" class="btn btn-primary">Add Subject</a>
        </div>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Subject Name</th>
                    <th>Teacher Name</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Science</td>
                    <td>Pn Ramlah</td>
                    <td>Delete</td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td>Pn Zakiah</td>
                    <td>Delete</td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td>En Abu</td>
                    <td>Delete</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
