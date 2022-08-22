@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 mx-auto my-5">
            <div class="card p-4">
                <div class="card-header">
                    <h3>Manage permissions for {{ $role->name }}</h3>
                </div>
                <div class="card-body">
                    <p>Change {{ $role->name }} permissions:</p>
                    <form action="{{ route('perms.assign', ['role'=> $role->id]) }}" method="POST">
                        @csrf
                        @method('patch')
                        <ul>
                            @foreach ($permissions as $permission)
                                <li>
                                    <input id="{{ $permission->code }}" type="checkbox" value="{{ $permission->id }}"
                                    name="{{ $permission->code }}"
                                    @if ($role->permissions->contains($permission))
                                        checked
                                    @endif>
                                    <label for="{{ $permission->code }}">{{ $permission->description }}</label>
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