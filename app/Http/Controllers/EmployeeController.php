<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ldcr_funcionario;
use App\Ldcr_cidade;
use App\Ldcr_estado;
use App\Ldcr_cargo;
use App\User;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
  
    public function index()
    {
        $users = User::all();
        $cities = Ldcr_cidade::all();
        $stats = Ldcr_estado::all();
        //o nome index abaixo refere-se ao nome da view tirando a parte .blade.php
        return view('index', compact('cities','stats', 'users'));
    }

   
    public function create()
    {
        $users = User::all();
        $cities = Ldcr_cidade::all();
        $stats = Ldcr_estado::all();
        //o nome index abaixo refere-se ao nome da view tirando a parte .blade.php
        return view('register_employee', compact('cities','stats', 'users'));
    }


    public function store(Request $request)
    {
        //array de dados que vem do post
        //$dados = $request->all();
        //instalciar model
        //Client::create($dados);
        //return back()->with(['success' => 'Cliente cadastrado com sucesso!']);

        $employee = $request->all();
        Ldcr_funcionario::create($employee);

        return back()->with(['success' => 'Funcionário cadastrado com sucesso!']);


    }

    
    public function show($id)
    {
        
        $users = User::all();
        $employee = Ldcr_funcionario::findOrFail($id);
        $stats = Ldcr_estado::all();
        $cities = Ldcr_cidade::all();
        return view('show_employee', compact('employee','cities','stats', 'users'));
    }

   
    public function edit($id)
    {
        $users = User::all();
        $employee = Ldcr_funcionario::findOrFail($id);
        $stats = Ldcr_estado::all();
        $cities = Ldcr_cidade::all();
        return view('edit_employee', compact('employee','cities','stats', 'users'));
    }

   
    public function update(Request $request, $id)
    {

       /*$request_form = $request->all();
        $employee = Ldcr_funcionario::findOrFail($id);
        $update_employee = $employee->update($request_form);*/

        DB::table('Ldcr_funcionario')->where('ID', $id)->update(['FUNC_NOME' => $request->FUNC_NOME, 'FUNC_RG' => $request->FUNC_RG, 'FUNC_CPF' => $request->FUNC_CPF, 'FUNC_CONTA' => $request->FUNC_CONTA, 'FUNC_DT_ADMISSAO' => $request->FUNC_DT_ADMISSAO, 'FUNC_DT_DEMISSAO' => $request->FUNC_DT_DEMISSAO, 'FUNC_STATUS' => $request->FUNC_STATUS, 'FUNC_NUMERO_CASA' => $request->FUNC_NUMERO_CASA, 'FUNC_BAIRRO' => $request->FUNC_BAIRRO, 'FUNC_MAE' => $request->FUNC_MAE, 'FUNC_PAI' => $request->FUNC_PAI, 'FUNC_DT_NASCI' => $request->FUNC_DT_NASCI, 'FUNC_FORMACAO' => $request->FUNC_FORMACAO, 'FUNC_CARGO' => $request->FUNC_CARGO, 'FUNC_EMAIL' => $request->FUNC_EMAIL, 'FUNC_TEL' => $request->FUNC_TEL, 'FUNC_ENDERECO' => $request->FUNC_ENDERECO, 'FK_FUNC_CIDADE' => $request->FK_FUNC_CIDADE, 'FK_FUNC_ESTD' => $request->FK_FUNC_ESTD, 'FUNC_CEP' => $request->FUNC_CEP]);
        
        return redirect('list_employee')->with(['success' => 'Funcionário editado com sucesso!']);        
    }

 
    public function destroy($id)
    {
        //
    }

    public function list()
    {
        $employees = Ldcr_funcionario::all();
        return view('list_employee', compact('employees'));
    }
}
