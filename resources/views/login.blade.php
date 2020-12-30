@extends('layouts.admin')

@section('title', 'Login')

@section('content')

    @if (session('warning'))
        <x-alert>
            {{ session('warning') }}
        </x-alert>
    @endif

    <br>

    <form method="POST">
        @csrf

        <label for="email">
            E-mail:<br>
            <input type="email" name="email" id="email">
        </label>

        <br>
        <br>

        <label for="password">
            Senha:<br>
            <input type="password" name="password" id="password">
        </label>

        <br>
        <br>

        <input type="submit" value="Entrar">
    </form>

    <br>

    <a href="{{ route('register') }}">Não possui uma conta? Clique aqui para registrar</a>

@endsection
