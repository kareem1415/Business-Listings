@extends('layouts.app')

@section('content')
    <style>
        .iti {
            position: relative;
            display: block;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing <span class="float-end"><a href="/home" class="btn btn-primary">Go Back</a></span></div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="/listing/{{ $listing->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter your name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ $listing->name }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Enter your address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" value="{{ $listing->address }}">
                        </div>
                        <div class="form-group">
                            <label for="website">Enter your website</label>
                            <input type="text" class="form-control" name="website" id="website" placeholder="Enter website" value="{{ $listing->website }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Enter your email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ $listing->email }}">
                        </div>
                        <div class="form-group">
                            <label for="phone">Enter your phone</label>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="{{ $listing->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="bio">Enter your bio</label>
                            <input type="text" class="form-control" name="bio" id="bio" placeholder="Enter bio" value="{{ $listing->bio }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript:
                "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            autoPlaceholder: true,
            preferredCountries: ['EG'],
        });
    </script>
@endsection
