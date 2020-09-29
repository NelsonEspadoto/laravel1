@extends('layout.admin')

@section('title', 'Configurações')

@section('content')
<h1>Configurações</h1>

@component('alert') 
    Cadastro Realizado com Sucesso!
@endcomponent

<form action="" method="post">
    @csrf

    Olá meu nome é {{$nome}}, e tenho {{$idade}} anos.
    
    @if ($idade > 18)
        E sou maior de Idade.
    @else
        E sou menor de idade.
    @endif

    <br><br>
    Nome: <br>
    <input type="text" name="nome" id=""> <br><br>

    Idade: <br>
    <input type="text" name="idade" id=""> <br><br>
    
    Cidade: <br>
    <input type="text" name="cidade" id=""> <br><br>

    <input type="submit" value="Enviar">
</form>
<br>
@endsection