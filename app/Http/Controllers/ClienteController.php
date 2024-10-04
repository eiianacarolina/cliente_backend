<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request){
        $cliente = Cliente::create([
            'nome' =>$request->nome,
            'celular'=>$request->celular,
            'cpf'=>$request->cpf,
            'e-mail'=>$request->email,
            'data_nascimento' =>$request->data_nascimento,
            'cidade' =>$request->cidade,
            'estado'=>$request->estado,
            'pais' =>$request->pais,
            'rua' =>$request->rua,
            'numero'=>$request->numero,
            'bairro'=>$request->bairro,
            'cep' =>$request->cep
        ]);

        return response()->json([
            'status'=> true,
            'message'=> 'cadastrado',
            'data'=> $cliente
        ]);
    }

    public function findByName(Request $request){
        $cliente = Cliente::where('nome', 'like', '%'.$request->nome.'%')->get();

        return response()->json([
            'status'=> true,
            'data'=> $cliente
        ]);
    }

    public function show($id){
        $cliente = Cliente::find($id);

        if($cliente == null){
            return response()->json([
                'status'=> false,
                'message'=> 'Cliente não encontrado' 
            ]);
        }

        return response()->json([
            'status'=> true,
            'data'=> $cliente
        ]);
    }

    public function index(){
        $clientes = Cliente::all();

        return response()->json([
            'status'=> true,
            'data'=> $clientes
        ]);
    }

    public function update(Request $request){
        $cliente = Cliente::find($request->id);

        if($cliente == null){
            return response()->json([
                'status'=> false,
                'message'=> 'Produto não encontrado'
            ]);
        }

        if(isset($request->nome)){
            $cliente->nome = $request->nome;
        }

        if(isset($request->celular)){
            $cliente->celular = $request->celular;
        }

        if(isset($request->cpf)){
            $cliente->cpf = $request->cpf;
        }

        if(isset($request->email)){
            $cliente->email = $request->email;
        }

        if(isset($request->data_nascimento)){
            $cliente->data_nascimento = $request->data_nascimento;
        }

        if(isset($request->cidade)){
            $cliente->cidade = $request->cidade;
        }

        if(isset($request->estado)){
            $cliente->estado = $request->estado;
        }

        if(isset($request->pais)){
            $cliente->pais = $request->pais;
        }

        if(isset($request->rua)){
            $cliente->rua = $request->rua;
        }

        if(isset($request->numero)){
            $cliente->nuemro = $request->numero;
        }

        if(isset($request->bairro)){
            $cliente->bairro = $request->bairro;
        }

        if(isset($request->cep)){
            $cliente->cep = $request->cep;
        }

        $cliente->update();

        return response()->json([
            'status'=> true,
            'message'=> 'Atualizado com Sucesso'
        ]);
    }

    public function delete($id){
        $cliente = Cliente::find($id);

        if($cliente == null){
            return response()->json([
                'status'=> false,
                'message'=> 'Produto não encontrado'
            ]);
        }

        $cliente->delete();

        return response()->json([
            'status'=> true,
            'message'=> 'Cadastro excluído com Sucesso'
        ]);
    }

    public function findByEmail(Request $request){
        $clientes = Cliente::where('e-mail', '=', $request->email)->get();

        return response()->json([
            'status' => true,
            'data'=> $clientes
        ]);
    }

    public function findByCpf(Request $request){
        $clientes = Cliente::where('cpf', '=', $request->cpf)->get();

        return response()->json([
            'status'=>true,
            'data'=> $clientes
        ]);
    }

    public function findByCidade(Request $request){
        $clientes = Cliente::where('cidade', '=', $request->cidade)->get();

        return response()->json([
            'status'=>true,
            'data'=> $clientes
        ]);
    }

    public function findByEstado(Request $request){
        $clientes = Cliente::where('estado', '=', $request->estado)->get();

        return response()->json([
            'status'=>true,
            'data'=>$clientes
        ]);
    }

    public function findByAno(Request $request){
        $clientes = Cliente::whereYear('data_nascimento', 'like', '%'. $request->data_nascimento . '%')->get();

        return response()->json([
            'status'=>true,
            'data'=>$clientes
        ]);
    }
}
