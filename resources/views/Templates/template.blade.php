<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Compras</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/614a259b2e.js" crossorigin="anonymous"></script>
</head>

<style>
    nav{
        font-family: "Century Gothic";
        font-weight: bold;

    }

    a{
        color: white;
        margin: 20px;
        text-decoration: none;

    }
    a:link {
        color: white;
    }

    /* link que foi visitado */
    a:visited {
        color: white;
    }

    /* mouse over */
    a:hover {
        color: black;
    }

    /* link selecionado */
    a:active {
        color: white;
    }

</style>


    <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: #dc3545; ">
    <a class="navbar-brand" href="{{'/'}}">GDC</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav">
        @if (Route::has('login'))

            @auth
                <li class="nav-item"> <a class="nav-link" href="{{url('/produtos')}}" style="color: white" >Produtos</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/fornecedor')}}" style="color: white">Fornecedores</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/solicitacao')}}" style="color: white">Solicitações</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" style="color: white">
                    {{ __('Sair') }}</a></li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
        @else
                    <li class="nav-item"><a href="{{ route('login') }}">Entrar</a></li>

            @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}">Cadastrar</a></li>
            @endif
                    <li class="nav-item"><a href="{{url('solicitacao/create')}}">Registrar Solicitação</a></li>
            @endauth


        @endif
        </ul>
    </div>
</nav>
@yield('content')


</html>


