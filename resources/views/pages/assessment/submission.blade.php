@extends('layout.appm')

@section('content')
    <div class="p-2 mb-4 bg-light rounded-3">
        <div class="container-fluid">
            <h1 class="display-5 fw-bold">ASSESSMENT SUBMISSION</h1>
        </div>
    </div>

<div class="cotainer">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Submission Date</th>
                <th>Submission</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Assessment 1</td>
                <td>6 Alpha</td>
                <td><a href="#" class="link-dark">View</a></td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>Assessment 2</td>
                <td>6 Alpha</td>
                <td>View</td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>Assessment 3</td>
                <td>6 Alpha</td>
                <td>View</td>
                <td>Delete</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
