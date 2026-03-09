<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Cliente;

class AgendamentoController extends Controller
{

public function index()
{

$agendamentos = Agendamento::with('cliente')->get();

return view('agendamentos.index', compact('agendamentos'));

}

public function create()
{

return view('agendamentos.create');

}

public function store(Request $request)
{

$nome = session('user_name');

// procura cliente
$cliente = Cliente::where('nome',$nome)->first();

// se não existir cria
if(!$cliente){

$cliente = Cliente::create([
'nome'=>$nome,
'telefone'=>''
]);

}

Agendamento::create([

'cliente_id'=>$cliente->id,
'barbeiro'=>$request->barbeiro,
'servico'=>$request->servico,
'data'=>$request->data,
'hora'=>$request->hora

]);

return redirect('/dashboard');

}

}