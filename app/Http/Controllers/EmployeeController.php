<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use App\City;
use App\State;

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
        //$employees = Employee::all();
        $cities = City::all();
        $stats = State::all();
        //o nome index abaixo refere-se ao nome da view tirando a parte .blade.php
        return view('index', compact('cities','stats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Register
    public function create()
    {
        //$employees = Employee::all();
        $cities = City::all();
        $stats = State::all();
        //o nome index abaixo refere-se ao nome da view tirando a parte .blade.php
        return view('register_employee', compact('cities','stats'));
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
