@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $listings->name }} <span class="float-end"><a href="/home" class="btn btn-secondary">Go Back</a></span></div>
                <div class="card-body">
                    <div class="list-group">
                        <div class="list-group-item">
                           Address: {{ $listings->address }}
                        </div>
                        <div class="list-group-item">
                            Website: <a href="{{ $listings->website }}">{{ $listings->website }}</a>
                        </div>
                        <div class="list-group-item">
                            Email: <a href="mailto:{{ $listings->email }}?Subject=Hello%20again" target="_top">{{ $listings->email }}</a>
                        </div>
                        <div class="list-group-item">
                            Phone: <a href="tel:{{ $listings->phone }}">{{ $listings->phone }}</a>
                        </div>
                        <div class="list-group-item">
                            Bio: {{ $listings->bio }}
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
