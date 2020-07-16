<!doctype html>

<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Compras</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">


    <style>
        html, body {
            background-color:#1d2124;
            color: ghostwhite;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;


        }

        footer {
            padding: 8px;
            background-color: #1b1e21;
            margin: 0px;
        }

        .links > a {
            color: ghostwhite;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

    </style>


</head>
<br><br>
<header>
    <body>
    <div >
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="{{url('/')}}">GRC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                @if (Route::has('login'))
                    <div class="navbar-nav links">
                        @auth

                            <a class="nav-item nav-link" href="{{url('/produtos')}}" style="color:ghostwhite">Produtos</a>
                            <a class="nav-item nav-link" href="{{url('/fornecedor')}}" style="color:ghostwhite">Fornecedores</a>
                            <a class="nav-item nav-link" href="{{url('/solicitacao')}}" style="color:ghostwhite">Solicitações</a>
                            <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:ghostwhite">
                                {{ __('Sair') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}">Entrar</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Cadastrar</a>
                            @endif
                            <a href="{{url('solicitacao/create')}}">Registrar Solicitação</a>
                        @endauth

                    </div>
                @endif
            </div>

    </nav>
    </div>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

    </div>

    @yield('content')

    </body>

</header>
</html>
