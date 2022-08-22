@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto my-5">
                @auth
                <div class="text-left">
                    <a class="btn btn-lg btn-primary my-3" href="{{ route('users.create') }}">Create user</a>
                </div> 
                @endauth
                <div class="card p-5">
                    <div class="card-heading">
                        <h3>User list</h3>
                        @guest
                        <p class="mt-1 mb-3 p-2 alert-warning">Login/Register to access more info and functionalities</p>
                        @endguest
                        @include('layouts.partials.search')                    
                    </div>
                    @include('layouts.partials.table')
                </div>
            </div>
        </div>
    </div>
@endsection