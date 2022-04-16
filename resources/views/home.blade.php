@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} <span class="float-end"><a href="/listing/create" class="btn btn-primary">Create listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your listing</h3>
                        @if (count($listings))
                            <table class="table table-striped">
                                <tr>
                                    <th>Company</th>
                                </tr>
                                @foreach($listings as $listing)
                                    <tr>
                                        <td>{{ $listing->name }}</td>
                                        <td>
                                        <form class="float-end ml-2 ms-sm-2" action="/listing/{{ $listing->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="button" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="/listing/{{ $listing->id }}/edit" class="btn btn-info float-end">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You don't have any listing yet</p>
                    {{ __('You are logged in!') }}
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
