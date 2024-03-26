@extends('app')
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border-0 rounded p-4" style="background: #1c3150;">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Upload Your Project</h5>
                            {{-- @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif --}}
                            <form method="POST" action="{{ route('resume.upload') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <input type="file" class="form-control @error('resume') is-invalid @enderror" name="resume">
                                    @error('resume')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-sm theme-btn">Upload Resume</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
