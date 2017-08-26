@extends('layouts.app')

@section('content')
      <h2 class="col-md-8">Militares Cadastrados</h2>
      <div class="col-md-8">
        <table class="table table-striped table-bordered table-responsive">
            <thead>
            <tr>
                <th>Nome de Guerra</th>
                <th>Posto</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($militares as $militar)
            <tr>
                <td>{{$militar->nome_guerra}}</td>
                <td>{{$militar->posto}}</td>
                <td>
                    <a href="{{url('/sistema/cautela/listar', ['id'=>$militar->id])}}"><button class="btn btn-success">Ver Cautelas</button></a>
                    <a href="{{url('/sistema/cautela/criar/').'/'.$militar->id}}"><button class="btn btn-success">Criar Cautela</button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
      </div>
@endsection
