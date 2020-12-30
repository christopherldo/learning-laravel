@extends('layouts.admin')

@section('title', 'Adição de Tarefas')

@section('content')
    <h1>Adição</h1>

    @if (session('warning'))
        <x-alert>
            {{ session('warning') }}
        </x-alert>
    @endif

    <form method="POST">
        @csrf

        <label for="titulo">
            <input type="text" name="titulo" id="titulo">
        </label>

        <input type="submit" value="Adicionar">
    </form>
@endsection
