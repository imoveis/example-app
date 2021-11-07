@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                    <hr>
                    @foreach ($user->companies as $company)
                        {{$company->name}}<br>
                        {{$company->cnpj}}
                    @endforeach
                    <a href="{{route('companies.edit', $company->id)}}" class="btn btn-flat btn-sm btn-outline-success"> Editar</a>
                </div>
            </div>
        </div>
    </div>
@stop
