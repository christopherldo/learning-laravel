@extends('layouts.admin')

@section('title', 'Listagem de Tarefas')

@section('content')
    <h1>Listagem</h1>

    <a href="{{route('tarefas.add')}}">Adicionar nova tarefa</a>

    <br>
    <br>

    @if(count($list) > 0)
        <ul>
            @foreach ($list as $item)
                <li>
                    <a href="{{route('tarefas.marcar', $item->id)}}">
                        @if ($item->resolvido === 1)
                            [DESMARCAR]
                        @else
                            [MARCAR]
                        @endif
                    </a>
                    {{$item->titulo}}
                    <a href="{{route('tarefas.edit', $item->id)}}">[EDITAR]</a>
                    <a href="{{route('tarefas.delete', $item->id)}}" onclick="confirm('Tem certeza que deseja excluir?')">[EXCLUIR]</a>
                </li>
            @endforeach
        </ul>
    @else
        Não há itens a serem listados.
    @endif
@endsection
