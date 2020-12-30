<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $user = $request->user();
        $nome = $user->name;

        $idade = 90;

        $cidade = $request->input('cidade');

        $lista = [
            ['nome' => 'farinha', 'qt' => 2],
            ['nome' => 'ovo', 'qt' => 4],
            ['nome' => 'corante', 'qt' => 1],
            ['nome' => 'ingrediente especial', 'qt' => 1]
        ];

        return view('admin.config', [
            'nome' => $nome,
            'idade' => $idade,
            'cidade' => $cidade,
            'lista' => $lista,
            'showForm' => Gate::allows('see-form')
        ]);
    }

    public function info() {
        echo 'Configurações INFO';
    }

    public function permissoes() {
        echo 'Configurações PERMISSÕES';
    }
}
