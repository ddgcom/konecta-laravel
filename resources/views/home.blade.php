@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if(Auth::user()->rol == 1) <div class="col-md-6 border inline"> <a href="{{ route('client.index') }}" class="btn btn-default">Administra Clientes</a></div> @endif
                    <div class="col-md-6 border inline"> <a href="{{ route('user.index') }}" class="btn btn-default">Administra Cuentas</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
