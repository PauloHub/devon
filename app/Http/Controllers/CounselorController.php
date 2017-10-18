<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ldcr_conselheiros_tute;
use App\Ldcr_conselho_tutelar;

class CounselorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    public function destroy($id)
    {
        //
    }

    public function find_counselors(Request $request){

        $cons = Ldcr_conselheiros_tute::select('CONS_ID','CONS_NOME')->where('FK_COTL_ID', $request->id)->orderBy('CONS_NOME', 'asc')->get();
        //$state_cities = Ldcr_cidade::select('CIDADE_DESC', 'CIDADE_ID', 'FK_ESTD_UF')->where('FK_ESTD_UF', $request->uf)->take(100)->get(); se quiser limitar a qt de resultados
        // $request->id é o id da escolha na opção do select
        return response()->json($cons);

    }
}
