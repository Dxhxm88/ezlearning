@extends('layout.appm')

@section('content')
    <div class="p-2 mb-4 bg-light rounded-3">
        <div class="container-fluid">
            <h1 class="display-5 fw-bold">EDIT CLASS</h1>
        </div>
    </div>

    <div class="row g-0">
        <div class="col-">
            <div class="card">
                <div class="card-header">CLASS DETAIL</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="desc" class="col-md-4 col-form-label text-md-end">Class Name</label>

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
                            <label for="sclass" class="col-md-4 col-form-label text-md-end">Subject</label>

                            <div class="col">
                                <select class="form-control form-select">
                                    <option value="" disabled selected>Select subject</option>
                                    <option value="1">SCIENCE</option>
                                    <option value="2">MATH</option>
                                </select>

                                @error('sclass')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                                <a href="{{ route('class.list') }}" class="btn btn-secondary ms-4">
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
