@extends('layouts.admin')

@section('title', 'Cadastro')

@section('content')

    @if ($errors->any())
        <x-alert>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif

    <br>

    <form method="POST">
        @csrf

        <label for="name">
            Nome:<br>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </label>

        <br>
        <br>

        <label for="email">
            E-mail:<br>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
        </label>

        <br>
        <br>

        <label for="password">
            Senha:<br>
            <input type="password" name="password" id="password">
        </label>

        <br>
        <br>

        <label for="password_confirmation">
            Confirme a senha:<br>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </label>

        <br>
        <br>

        <input type="submit" value="Cadastrar">
    </form>

    <br>

    <a href="{{ route('login') }}">Já possui uma conta? Clique aqui para fazer login</a>

@endsection
