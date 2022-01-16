@extends('layout.appm')

@section('content')
    <div class="p-2 mb-4 bg-light rounded-3">
        <div class="container-fluid">
            <h1 class="display-5 fw-bold">ASSESSMENT</h1>
        </div>
    </div>

        <div class="row g-0">
            <div class="col-">
                <div class="card">
                    <div class="card-header">ASSESSMENT DETAIL</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="desc" class="col-md-4 col-form-label text-md-end">Teacher Name</label>

                                <div class="col">
                                    <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}" required autocomplete="desc" autofocus>

                                    @error('desc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="desc" class="col-md-4 col-form-label text-md-end">Subject Name</label>

                                <div class="col">
                                    <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}" required autocomplete="desc" autofocus>

                                    @error('desc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="desc" class="col-md-4 col-form-label text-md-end">Due Date</label>

                                <div class="col">
                                    <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}" required autocomplete="desc" autofocus>

                                    @error('desc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="desc" class="col-md-4 col-form-label text-md-end">Attachment</label>

                                <div class="col">
                                    <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}" required autocomplete="desc" autofocus>

                                    @error('desc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="upfile" class="col-md-4 col-form-label text-md-end">Choose File</label>

                                <div class="col">
                                    <input id="upfile" type="file" class="form-control @error('upfile') is-invalid @enderror" name="upfile" value="{{ old('upfile') }}" required autocomplete="upfile">

                                    @error('upfile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    <a href="{{ route('student.assessment.view') }}" class="btn btn-secondary ms-4">
                                        Back
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
