@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest business Listing</div>
                <div class="card-body">
                    @if (count($listings))
                        <div class="list-group">
                            @foreach($listings as $listing)
                                <div class="list-group-item">
                                <a href="/listing/{{ $listing->id }}">{{ $listing->name }}</a>
                                </div>

                            @endforeach
                        </div>
                    @else

                        <p>No Listing Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
