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
                    <h2>{{$company->name}}</h2>
                    <form role="form" action="{{ route('companies.update',$company->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-2">
                                <label for="">CEP</label>
                                <input type="text" name="zipcode" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Nome da rua</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Cidade</label>
                                <input type="text" name="city" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label for="">Estado</label>
                                <input type="text" name="state" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <input type="submit" class="mt-5 btn-primary btn" value="Cadastrar endereço">
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                          <th>Rua</th>
                          <th>CEP</th>
                          <th>Cidade</th>
                          <th>Estado</th>
                        </tr>
                        @forelse ($company->adresses as $address)
                          <tr>
                            <td>{{$address->name}}</td>
                            <td>{{$address->zipcode}}</td>
                            <td>{{$address->city}}</td>
                            <td>{{$address->state}}</td>
                          </tr>                        
                        @empty
                            <tr>
                                <td colspan="4">nenhum endereço cadastro</td>
                            </tr>
                        @endforelse
                      </table>
                </div>
            </div>
        </div>
    </div>
@stop
