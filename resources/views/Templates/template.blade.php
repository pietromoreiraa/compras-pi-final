

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Compras</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">

</head>
<body>
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>

<template>
    <mdb-navbar color="info" position="top" dark>
        <mdb-navbar-brand href="https://mdbootstrap.com/">
            Navbar
        </mdb-navbar-brand>
        <mdb-navbar-toggler>
            <mdb-navbar-nav>
                <mdb-nav-item href="#" active>Home</mdb-nav-item>
                <mdb-nav-item href="#">Features</mdb-nav-item>
                <mdb-nav-item href="#">Pricing</mdb-nav-item>
            </mdb-navbar-nav>
            <form>
                <mdb-input type="text" class="text-white" placeholder="Search" aria-label="Search" label navInput waves waves-fixed/>
            </form>
        </mdb-navbar-toggler>
    </mdb-navbar>
</template>

<script>
    import { mdbNavbar, mdbNavbarBrand, mdbNavbarToggler, mdbNavbarNav, mdbNavItem, mdbInput } from 'mdbvue';
    export default {
        name: 'NavbarPage',
        components: {
            mdbNavbar,
            mdbNavbarBrand,
            mdbNavbarToggler,
            mdbNavbarNav,
            mdbNavItem,
            mdbInput
        }
    }
</script>

<div class="row">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth

                <a href="{{url('/produtos')}}">Produtos</a>
                <a href="{{url('/fornecedor')}}">Fornecedores</a>
                <a href="{{url('/solicitacao')}}">Solicitações</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Sair') }}
                </a>

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

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

</div>
     @yield('content')
</body>
</html>
