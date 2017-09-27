<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ldcr_funcionario;
use App\ldcr_municipio;
use App\ldcr_estado;
use App\Ldcr_cargo;
use App\User;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //List
    public function index()
    {
        $users = User::all();
        $cargos = Ldcr_cargo::all();
        $cities = ldcr_municipio::all();
        $stats = ldcr_estado::all();
        //o nome index abaixo refere-se ao nome da view tirando a parte .blade.php
        return view('index', compact('cities','stats','cargos', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Register
    public function create()
    {
        $users = User::all();
        $cargos = Ldcr_cargo::all();
        $cities = ldcr_municipio::all();
        $stats = ldcr_estado::all();
        //o nome index abaixo refere-se ao nome da view tirando a parte .blade.php
        return view('register_employee', compact('cities','stats', 'cargos', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Save
    public function store(Request $request)
    {
        //array de dados que vem do post
        //$dados = $request->all();
        //instalciar model
        //Client::create($dados);
        //return back()->with(['success' => 'Cliente cadastrado com sucesso!']);

        $dados = $request->all();

        Ldcr_funcionario::create($dados);

        return back()->with(['success' => 'Funcionário cadastrado com sucesso!']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Show one
    public function show($id)
    {
        
        //$func = DB::table('ldcr_funcionario as f ')->select('f.*')->where('FUNC_ID', '$id');
        $employee = Ldcr_funcionario::findOrFail($id);
        $cargos = ldcr_cargo::all();
        $stats = ldcr_estado::all();
        $cities = ldcr_municipio::all();
        return view('show_employee', compact('employee','cities','stats', 'cargos', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //View edit
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Save update
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Delete
    public function destroy($id)
    {
        //
    }

    public function listar()
    {
        $funcs = Ldcr_funcionario::all();
        return view('list_employee', compact('funcs'));
    }
}
