@extends('Templates.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #171a1d" >
                <div class="card-header " style="background-color: #1c7430; color: #171a1d; font-weight:bold ">Funcionario Logado com Sucesso</div>

                <div class="card-body" style="background-color: #1b1e21 ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @php
                    $name=auth()->user()->name;
                    @endphp

                        Bem vindo, {{$name}}.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
