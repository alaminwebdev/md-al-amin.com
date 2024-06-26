@extends('app')
@section('content')
    <section class="about-area py-4 py-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pdf rounded" style="position: relative; padding-bottom: 80%; height: 0; overflow: hidden; max-width: 100%;">
                        <iframe class="rounded" src="{{ asset('resume/' . $fileName) }}" type="application/pdf" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
