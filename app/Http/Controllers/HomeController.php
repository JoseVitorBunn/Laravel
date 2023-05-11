<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $filmes = [
            'Senhor dos Anéis',
            'Debi e Loide',
            'Alice no País das Maravilhas'
        ];

        return view('home', compact('filmes'));
    }

    public function contato()
    {
        return view('contato');
    }

    public function enviarContato(Request $request)
    {
        $dados = $request->all();
    
        // Lógica para salvar ou processar os dados do formulário
    
        return view('resultado', compact('dados'));
    }

    public function resultado(Request $request)
    {
        $dados = $request->session()->get('dados');

        return view('resultado', compact('dados'));
    }
}
