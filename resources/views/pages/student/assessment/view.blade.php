@extends('layout.appm')

@section('content')
<div class="p-2 mb-4 bg-light rounded-3">
    <div class="container-fluid">
        <h1 class="display-5 fw-bold">VIEW ASSESSMENT</h1>
    </div>
</div>

<div class="cotainer">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Assessment Name</th>
                <th>Class</th>
                <th>Submission</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Assessment 1</td>
                <td>6 Alpha</td>
                <td><a href="{{ route('student.assessment.detail') }}" class="link-dark">View</a></td>
                <td>Completed</td>
            </tr>
            <tr>
                <td>Assessment 2</td>
                <td>6 Alpha</td>
                <td>View</td>
                <td>Completed</td>
            </tr>
            <tr>
                <td>Assessment 3</td>
                <td>6 Alpha</td>
                <td>View</td>
                <td>Completed</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
