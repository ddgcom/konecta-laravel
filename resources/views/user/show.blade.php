@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADMIN user') }} <a class="btn btn-primary float-right" href="{{ route('user.index')}}">back</a></div>

                <div class="card-body">
                <ul>
                    <li>Name: {{ $user->name }}</li>
                    <li>Email: {{ $user->email }}</li>
                    <li>Rol: {{ $user->rol }}</li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection