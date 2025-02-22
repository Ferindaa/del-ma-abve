@extends('layouts.admin')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! Admin ') }}{{ Auth::user()->name }}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="col-md-8">
                <a href="{{ url('dataketerangan') }}" class="btn btn-primary mb-3">Cek Catatan Perjalanan Anggota</a>
            </div>
        </div>
    </div>
</div>
@endsection
