<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojasController extends Controller
{
    public function show($estado)
    {
        // Lógica para buscar as lojas com base no estado
        // Por exemplo, você pode buscar no banco de dados e retornar uma view

        // Exemplo de lógica simulada:
        $lojas = ['Loja 1', 'Loja 2', 'Loja 3']; // Simule as lojas do estado

        return view('stores', compact('estado', 'lojas'));
    }
}
