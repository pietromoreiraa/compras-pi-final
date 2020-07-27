@extends('Templates.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body mt-5"  style="background-color: white; font-family: 'Century Gothic'" >
                <div class="card-header " style="background-color: #1b1e21; color: white; font-weight:bold ">Seu Login foi um sucesso!</div>

                <div class="card-body" style="background-color: blanchedalmond ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @php
                    $name=auth()->user()->name;
                    @endphp

                        <b>Bem vindo, {{$name}}.</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
