@extends('layout.appm')

@section('content')
    <div class="p-2 mb-4 bg-light rounded-3">
        <div class="container-fluid">
            <h1 class="display-5 fw-bold">SUBJECT LIST</h1>
        </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-end">
            <a href="{{ route('subject.add') }}" class="btn btn-primary">Add Subject</a>
        </div>
    </div>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Subject Name</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Science</td>
                    <td><a href="{{ route('subject.edit') }}" class="link-dark">Edit</a></td>
                    <td>Delete</td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
