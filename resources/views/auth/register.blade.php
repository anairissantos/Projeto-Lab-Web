@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sobrenome') ? ' has-error' : '' }}">
                            <label for="sobrenome" class="col-md-4 control-label">Sobrenome</label>

                            <div class="col-md-6">
                                <input id="sobrenome" type="text" class="form-control" name="sobrenome" value="{{ old('sobrenome') }}" required autofocus>

                                @if ($errors->has('sobrenome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sobrenome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Login</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" required>

                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirme a senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('reserva_id') ? ' has-error' : '' }}">
                            <label for="reserva_id" class="col-md-4 control-label">Reserva</label>

                            <div class="col-md-6">
                                <select name="reserva_id" id="reserva_id" class="form-control">
                                    <option></option>
                                    @foreach($reservas as $reserva)
                                        <option value="{{$reserva->id}}">{{$reserva->sigla}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('reserva_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reserva_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('senha_admin') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Senha Admin</label>

                            <div class="col-md-6">
                                <input id="senha_admin" type="password" class="form-control" name="senha_admin" required>

                                @if ($errors->has('senha_admin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('senha_admin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
