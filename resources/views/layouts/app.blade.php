<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css"/>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
    @if (Auth::guest())
      body {
      	background: url("/images/background.png") repeat;
      }
    @endif
    img {
      margin-top: 49px;
      margin-left: 25px;
    }
    </style>
</head>
<body>
  @if (!Auth::guest())
  <div class="col-md-2">
    <nav class="navbar navbar-default sidebar" role="navigation">
        <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ url('/') }}">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Militar <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="{{ url('/sistema/militar/criar') }}">Criar</a></li>
                <li><a href="{{ url('/sistema/militar/listar') }}">Listar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Armamentos <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-shopping-cart"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="{{ url('/sistema/armamento/criar') }}">Criar</a></li>
                <li><a href="{{ url('/sistema/armamento/listar') }}">Listar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Munição <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="{{ url('/sistema/municao/criar') }}">Criar</a></li>
                <li><a href="{{ url('/sistema/municao/listar') }}">Listar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acessórios <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-sunglasses"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="{{ url('/sistema/acessorio/criar') }}">Criar</a></li>
                <li><a href="{{ url('/sistema/acessorio/listar') }}">Listar</a></li>
              </ul>
            </li>
            <li ><a href="{{ url('/sistema/cautela/listar') }}">Cautelas <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estoque <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="{{ url('/sistema/estoque/gerenciar') }}">Entrada de Itens </a></li>
                <li><a href="{{ url('/sistema/estoque/listar') }}">Listar </a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->nome }} <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
              <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Logout </a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
@endif
  <div class="col-md-8">
    <div class="inherit-width">
      @if(isset($erro))
        <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{$erro}}</div>
      @endif
      @if(session('erro'))
        <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('erro')}}</div>
      @endif
      @if(isset($mensagem))
        <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{$mensagem}}</div>
      @endif
      @if(session('mensagem'))
        <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('mensagem')}}</div>
      @endif
    </div>
    @yield('content')
  </div>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <!-- Scripts -->
    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
