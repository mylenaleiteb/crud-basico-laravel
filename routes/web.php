<?php

use App\Http\Controllers\QuestionarioController;
use App\Models\Questionario;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [QuestionarioController::class, 'inicio']);
Route::get('/create', [QuestionarioController::class, 'create'])->name("pagina_inicial");
Route::post('/create', [QuestionarioController::class, 'store'])->name("registrar_pergunta");
Route::get('/read/{id}', [QuestionarioController::class, 'show'])->name("mostrar_pergunta");
Route::get('edit/{id}', [QuestionarioController::class, 'edit']); // carregar formulário de edição
Route::post('edit/{id}', [QuestionarioController::class, 'update'])->name('editar_pergunta'); // receber os dados do formulário de edição
Route::get('delete/{id}', [QuestionarioController::class, 'delete']); // identificar e exibir pro usuário o registro para excluir
Route::post('delete{id}', [QuestionarioController::class, 'destroy'])->name("deletar_pergunta"); // deletar a pergunta
