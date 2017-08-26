@extends('layouts.app')

@section('content')
      <div class="row">
      <h2>Munições Cadastrados</h2>
      <table class="table table-striped table-bordered table-responsive">
          <thead>
          <tr>
              <th>Calibre</th>
              <th>Descrição</th>
              <th>Quantidade</th>
          </tr>
          </thead>
          <tbody>
          @foreach($municoes as $municao)
              <tr>
                  <td>{{$municao->calibre}}</td>
                  <td>{{$municao->descricao}}</td>
                  <td>{{$municao->quantidade}}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
      </div>
@endsection
