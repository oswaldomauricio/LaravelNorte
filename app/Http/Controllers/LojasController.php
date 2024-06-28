<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;

class LojasController extends Controller
{
    public function show($estado = 'Amazonas')
    {
        $lojas = Loja::where('estado', $estado)->get();

        return view('stores', compact('estado', 'lojas'));
    }
}
