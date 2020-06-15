@extends('Templates.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Funcionario Logado com Sucesso</div>

                <div class="card-body">
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
