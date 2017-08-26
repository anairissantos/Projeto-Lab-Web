@extends('layouts.app')

@section('content')
      <h2 class="col-md-8">Munições Cadastrados</h2>
      <div class="col-md-8">
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
