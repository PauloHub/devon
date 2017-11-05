<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ldcr_doador;
use App\Ldcr_cidade;
use App\Ldcr_estado;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
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
        $cities = Ldcr_cidade::all();
        $stats = Ldcr_estado::all();
        return view('register_donor', compact('cities','stats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donor = $request->all();
        Ldcr_doador::create($donor);
        return back()->with(['success' => 'Doador cadastrado com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donor = Ldcr_doador::findOrFail($id);
        $stats = Ldcr_estado::all();
        $cities = Ldcr_cidade::all();
        
        return view('show_donor', compact('donor','cities','stats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donor = Ldcr_doador::findOrFail($id);
        $stats = Ldcr_estado::all();
        $cities = Ldcr_cidade::all();
        return view('edit_donor', compact('donor','cities','stats'));
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
        
        /*
        $request_form = $request->all();
        $donor2 = Ldcr_doador::findOrFail($id);
        $update_donor = $donor2->update($request_form);
        */

        
        DB::table('Ldcr_doador')->where('ID', $id)->update([
            'DOAD_NOME' => $request->DOAD_NOME,
            'DOAD_CPF' => $request->DOAD_CPF,
            'DOAD_ENDE' => $request->DOAD_ENDE,
            'DOAD_NUMERO_CASA' => $request->DOAD_NUMERO_CASA,
            'DOAD_BAIRRO' => $request->DOAD_BAIRRO,
            'FK_DOAD_CIDADE' => $request->FK_DOAD_CIDADE,
            'FK_DOAD_ESTD' => $request->FK_DOAD_ESTD,
            'DOAD_CEP' => $request->DOAD_CEP,
            'DOAD_EMAIL' => $request->DOAD_EMAIL,
            'DOAD_OBS' => $request->DOAD_OBS,
            'DOAD_TEL_1' => $request->DOAD_TEL_1,
            'DOAD_TEL_2' => $request->DOAD_TEL_2
        ]);
        
        
        return redirect('list_donor')->with(['success' => 'Doador editado com sucesso!']);
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

    public function list()
    {
        $donors = Ldcr_doador::all();
        return view('list_donor', compact('donors'));
    }
}
