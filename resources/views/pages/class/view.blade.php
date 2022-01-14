@extends('layout.appm')

@section('content')
    <div class="p-2 mb-4 bg-light rounded-3">
        <div class="container-fluid">
            <h1 class="display-5 fw-bold">CLASS LIST</h1>
        </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-end">
            <a href="{{ route('class.add') }}" class="btn btn-primary">Add Class</a>
        </div>
    </div>

    <div class="cotainer">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Class Name</th>
                    <th>Subject</th>
                    <th>Students</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>6 Alpha</td>
                    <td>Science</td>
                    <td><a href="{{ route('class.detail') }}" class="link-dark">View</a></td>
                    <td><a href="{{ route('class.edit') }}" class="link-dark">Edit</a></td>
                    <td>Delete</td>
                </tr>
                <tr>
                    <td>6 Beta</td>
                    <td>Science</td>
                    <td>View</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                    <td>6 Giga</td>
                    <td>Science</td>
                    <td>View</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
