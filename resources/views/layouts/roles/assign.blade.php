@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 mx-auto my-5">
            <div class="card p-4">
                <div class="card-header">
                    <h3>Assign role/status to {{$user->first_name}}</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5></h5>
                        <a href="{{ route('perms.show.assign', ['role'=> $user->role->id]) }}"><small>Change permissions for: {{ $user->role->name }} here</small></a>
                    </div>
                    <p>Change user role/status</p>
                    <form action="{{ route('role.assign', ['user'=> $user->id]) }}" method="POST">
                        @csrf
                        @method('put')
                        <ul>
                            @foreach ($roles as $role)
                                <li>
                                    <input id="{{ $role->name }}" type="radio" value="{{ $role->id }}"
                                    name="role"
                                    @if ($user->role->name === $role->name)
                                        checked
                                    @endif>
                                    <label for="{{ $role->name }}">{{ $role->name }}</label>
                                </li>
                            @endforeach
                        </ul>
                        <button class="btn btn-primary btn-md" type="submit">Submit</button>
                    </form>
                </div>
                @if (session('success'))
                    <div class="card-footer">
                        <p class="p-3 alert-success">{{ session('success') }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection