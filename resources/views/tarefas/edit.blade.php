@extends('layouts.admin')

@section('title', 'Edição de Tarefas')

@section('content')
    <h1>Edição</h1>

    @if (session('warning'))
        <x-alert>
            {{ session('warning') }}
        </x-alert>
    @endif

    <form method="POST">
        @csrf

        <label for="titulo">
            <input type="text" name="titulo" id="titulo" value="{{$data->titulo}}">
        </label>

        <input type="submit" value="Adicionar">
    </form>
@endsection
