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
use App\Ldcr_acolhimento;
use App\Ldcr_tipo_documento;

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
        $qpis = ldcr_questoes_pia_iten::all();
        $cts = Ldcr_conselho_tutelar::all();
        $acolhimentos = Ldcr_acolhimento::all();
        $count1 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 1)->count();
        $count2 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 2)->count();
        $count3 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 3)->count();
        $count4 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 4)->count();
        $count5 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 5)->count();
        $count6 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 6)->count();
        $count7 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 7)->count();
        $count8 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 8)->count();
        $count9 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 9)->count();
        $count10 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 10)->count();
        $count11 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 11)->count();
        $count12 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 12)->count();
        $count13 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 13)->count();
        $count14 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 14)->count();
        $count15 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 15)->count();
        $count16 = DB::table('ldcr_questoes_pia_iten')->where('FK_QESP_ID', 16)->count();

        $tipo_documentos = ldcr_tipo_documento::all();
        $count_doc = DB::table('ldcr_tipo_documento')->count();

        $apis_array = array($count1,$count2,$count3,$count4,$count5,$count6,$count7,$count8,$count9,$count10,$count11,$count12,$count13,$count14,$count15,$count16);

        return view('register_child', compact('cities','stats', 'conselheiros', 'conselhos', 'racas', 'qpis', 'acolhimentos', 'apis_array','tipo_documentos','count_doc'));
        
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
