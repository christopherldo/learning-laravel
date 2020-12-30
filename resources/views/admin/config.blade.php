@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    <h1>Configurações</h1>

    Olá, {{ $nome }} - <a href="{{ route('logout') }}">Sair</a>

    <x-alert>
        Alguma frase qualquer 2
    </x-alert>

    <ul>
        @forelse ($lista as $item)
            <li>{{ $item['nome'] }} - {{ $item['qt'] }}</li>
        @empty
            <li>Não há ingredientes</li>
        @endforelse
    </ul>

    @if ($showForm)
        <form method="POST">
            @csrf

            <label for="nome">
                Nome:<br>
                <input type="text" name="nome" id="nome">
            </label>

            <br>
            <br>

            <label for="idade">
                Idade:<br>
                <input type="text" name="idade" id="idade">
            </label>

            <br>
            <br>

            <label for="cidade">
                Cidade:<br>
                <input type="text" name="cidade" id="cidade">
            </label>

            <br>
            <br>

            <input type="submit" value="Enviar">
        </form>
    @endif

    <br>

    <a href="{{ route('config.info') }}">Informações</a><br>
    <a href="{{ route('config.permissoes') }}">Permissões</a>
@endsection
