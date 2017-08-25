@extends('layouts.app')

@section('content')
      <div class="container">

        <div class="row" id="pwd-container">
          <div class="col-md-4"></div>

          <div class="col-md-4">
            <section class="login-form">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                  {{ csrf_field() }}
                <img src="/images/brand.png" class="img-responsive" alt="" />
                <input placeholder="Login" id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" required autofocus/>
                @if ($errors->has('login'))
                    <span class="help-block">
                        <strong>{{ $errors->first('login') }}</strong>
                    </span>
                @endif
                <input placeholder="Senha" type="password" class="form-control input-lg" id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif


                <div class="pwstrength_viewport_progress"></div>

                  @if (Route::has('login'))
                      <div class="top-right links">
                          <button type="submit" class="btn btn-lg btn-primary btn-block">
                            Login
                          </button>
                        <div>
                        <a class="btn btn-link" href="{{ url('/register') }}">
                              Registre-se
                        </a>
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                            Esqueceu a senha?
                        </a>
                      </div>
                      </div>
                  @endif

              </form>
            </section>
            </div>

            <div class="col-md-4"></div>


        </div>

        <p>
        <br>
          <br>

        </p>


      </div>y
@endsection
