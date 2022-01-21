@extends('layout.appm')

@section('content')
    <div class="p-2 mb-4 bg-light rounded-3">
        <div class="container-fluid">
            <h1 class="display-5 fw-bold">ASSESSMENT SUBMISSION</h1>
        </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-start">
            <a href="{{ route('assessment.view', ['subject' => request()->route('subject'), 'class' =>request()->route('class')]) }}" class="btn btn-secondary">Back</a>
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
            @foreach ($subs as $sub)
                <tr>
                    <td>{{ $sub->name }}</td>
                    <td>{{ $sub->created_at }}</td>
                    <td><a href="{{ asset($sub->submission_file) }}" target="_blank"class="link-dark">View</a></td>
                    <td>Delete</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
