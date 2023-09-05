<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;

class HomeControler extends Controller
{
    public function index(){
        return view('home');
    }

    public function store(Request $request){

        $rules = [
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'interesse' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'mensagem' => 'required|string',
        ];

        $messages = [
            'required' => 'O campo :attribute é obrigatório.',
            'email' => 'Por favor, insira um endereço de email válido.',
            'date' => 'Por favor, insira uma data válida.',
            'max' => 'O campo :attribute não deve ter mais de :max caracteres.',
        ];

        $request->validate($rules, $messages);
            
    Contato::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'interesse' => $request->interesse,
        'data_nascimento' => $request->data_nascimento,
        'mensagem' => $request->mensagem,
    ]);

   
    return redirect('home')->with('succes',  'Mensagem enciada com sucesso!');

  

    //  return redirect()->routes('adm');
 }
}
