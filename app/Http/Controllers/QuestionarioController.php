<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionario;

class QuestionarioController extends Controller
{
    public function create() {
        return view('questionarios.create');
    }

    public function store(Request $request) {
        Questionario::create([
            'nomeAvaliador' => $request->nomeAvaliador,
            'pergunta' => $request->pergunta,
            'peso' => $request->peso
        ]);
        return ("Pergunta cadastrada com sucesso!");
        
    }

    public function show($id) {
        $questionario = Questionario::findOrFail($id);
        return view('questionarios.show', ['questionario'=>$questionario]);
    }

    public function edit($id) {
        $questionario = Questionario::findOrFail($id);
        return view('questionarios.edit', ['questionario'=>$questionario]);
    }

    public function update(Request $request, $id) {
        $questionario = Questionario::findOrFail($id);

        $questionario->update([
            'nomeAvaliador'=>$request->nomeAvaliador,
            'pergunta'=>$request->pergunta,
            'peso'=>$request->peso
        ]);
        return ("Pergunta editada com sucesso!");
    }

    public function delete($id) {
        $questionario = Questionario::findOrFail($id);
        return view('questionarios.delete', ['questionario'=>$questionario]);
    }

    public function destroy(Request $request, $id) {
        $questionario = Questionario::findOrFail($id);
        $questionario->delete();

        return "Pergunta excluída com sucesso!";
    }

    public function inicio() {
        return view('questionarios.inicio');
    }
}
