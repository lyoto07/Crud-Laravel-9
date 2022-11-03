<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Client as ClientModel;
use Illuminate\Support\Facades\DB;

class ClientController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function list(){
        $clients = DB:: table('cliente')->get();

        return view('client/list-client', compact('clients'));
    }
    public function create(){
        return view('client/create-client');
        // retorna uma view com campos para preencher
    }
    
    public function store(Request $request){
        $client = new ClientModel();
        $client->cpf = $request->input('cpf');
        $client->name = $request->input('name');
        $client->phone = $request->input('phone');
        $client->cep = $request->input('cep');
        $client->cidade = $request->input('cidade');
        $client->estado = $request->input('estado');
        $client->bairro = $request->input('bairro');
        $client->endereco = $request->input('endereco');
        $client->venda_idvenda = 1;
        
        $client->save();

        return redirect( route('client.list') );
        // retorna uma view de todos os clientes
    }

    public function edit ($id)
    {
        $client = ClientModel::find($id);

        if(isset($client)){
            return redirect( route('client.list'));
        }
    }

    public function update(Request $request, $id)
    {
        $client = ClientModel::find($id);
        if(isset($client)){
            $client->cpf = $request->input('cpf') ?? $client->cpf;
            $client->name = $request->input('name') ?? $client->name;
            $client->phone = $request->input('phone') ??  $client->phone;
            $client->cep = $request->input('cep') ??  $client->cep;
            $client->cidade = $request->input('cidade') ??  $client->cidade;
            $client->estado = $request->input('estado') ??  $client->estado;
            $client->bairro = $request->input('bairro') ??  $client->bairro;
            $client->endereco = $request->input('endereco') ??  $client->endereco;

            $client->save();
        }

        return redirect( route('client.list'));
    }

    public function destroy ($id)
    {
        $client = ClientModel::find($id);
        if(isset($client)){
            $client->delete();
        }

        return redirect( route('client.list'));
    }
}
