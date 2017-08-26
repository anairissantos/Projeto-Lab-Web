@extends('layouts.app')

@section('content')
        <h2 class="col-md-8">Munições Cadastrados</h2>
        <div class="col-md-8">
        <table class="table table-striped table-bordered table-responsive">
            <thead>
              <tr>
                  <th>Descrição</th>
                  <th>Quantidade</th>
              </tr>
            </thead>
            <tbody>
            @foreach($acessorios as $acessorio)
                <tr>
                    <td>{{$acessorio->descricao}}</td>
                    <td>{{$acessorio->quantidade}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div>
@endsection
