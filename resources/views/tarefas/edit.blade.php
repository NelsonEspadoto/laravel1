@extends('layout.admin')

@section('title', 'Adicionar Tarefas')

@section('content')

    <h1>Edição da Tarefa</h1>

    @if (session('warning'))
        @alert
            {{ session('warning') }}
        @endalert
    @endif

    <form action="#" method="post">
        @csrf

        <label for="">
            Tarefa:
        <input type="text" name="titulo" value="{{ $data->titulo }}">
        </label>

        <button>Salvar</button>
    </form>

@endsection