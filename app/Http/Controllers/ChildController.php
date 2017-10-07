<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ldcr_funcionario;
use App\Ldcr_cidade;
use App\Ldcr_estado;
use App\Ldcr_cargo;
use App\User;
use App\Ldcr_conselho_tutelar;
use App\Ldcr_conselheiros_tute;
use App\Ldcr_raca;
use App\ldcr_questoes_pia_iten;


use Illuminate\Support\Facades\DB;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //List
    public function index()
    {
        //$employees = Client::all();
        //o nome index abaixo refere-se ao nome da view tirando a parte .blade.php
        //return view('index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Register
    public function create()
    {
        
        $cities = Ldcr_cidade::all();
        $stats = Ldcr_estado::all();
        $conselheiros = Ldcr_conselheiros_tute::all();
        $conselhos = Ldcr_conselho_tutelar::all();
        $racas = Ldcr_raca::all();
        //Pega todos os itens da questão onde id da pergunta = 2
        //$qpis = ldcr_questoes_pia_iten::where('FK_QUESP_ID', 2)->where('QEPI_SIT', '1');
        $qpis = ldcr_questoes_pia_iten::all();

        return view('register_child', compact('cities','stats', 'conselheiros', 'conselhos', 'racas', 'qpis'));
        
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
        //
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
        //
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
}
