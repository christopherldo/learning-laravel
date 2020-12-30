<?php

use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

Route::view('/teste', 'teste');

Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [Auth\LoginController::class, 'authenticate']);
Route::get('/logout', [Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [Auth\RegisterController::class, 'register']);

Route::resource('todo', TodoController::class);
/*
GET - /todo - index - todo.index;
GET - /todo/create - create - todo.create;
POST - /todo - store - todo.store;
GET - /todo/{id} - show - todo.show;
GET - /todo/{id}/edit - edit - todo.edit;
PUT - /todo/{id} - update - todo.update;
DELETE - /todo/{id} - destroy - todo.destroy;
*/

Route::prefix('/tarefas')->group(function () {
    Route::get('/', [TarefasController::class, 'list'])->name('tarefas.list');
    Route::get('add', [TarefasController::class, 'add'])->name('tarefas.add');
    Route::post('add', [TarefasController::class, 'addAction']);
    Route::get('edit/{id}', [TarefasController::class, 'edit'])->name('tarefas.edit');
    Route::post('edit/{id}', [TarefasController::class, 'editAction']);
    Route::get('delete/{id}', [TarefasController::class, 'del'])->name('tarefas.delete');
    Route::get('marcar/{id}', [TarefasController::class, 'done'])->name('tarefas.marcar');
});

Route::prefix('/config')->group(function () {
    Route::get('/', [ConfigController::class, 'index'])->name('config.index');
    Route::post('/', [ConfigController::class, 'index']);
    Route::get('info', [ConfigController::class, 'info'])->name('config.info');
    Route::get('permissoes', [ConfigController::class, 'permissoes'])->name('config.permissoes');
});

Route::fallback(function () {
    return view('404');
});
