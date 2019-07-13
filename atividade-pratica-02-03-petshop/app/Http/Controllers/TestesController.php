<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Procedures;
use App\Testes;
use Illuminate\Support\Facades\Auth;


class TestesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teste = Testes::all();
        $user = User::all();
        $procedure = Procedures::all();
        return view('testes.index', ['user'=>$user],
              ['procedure'=> $procedure])
              ->with(['teste' => $teste]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $procedure = Procedures::all();
        return view('testes.create', ['user'=>$user], ['procedure'=> $procedure]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Testes::create($request->all());
        return redirect()->route ('testes.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Testes  $testes
     * @return \Illuminate\Http\Response
     */
    public function show(Testes $teste)
    {
        return view('testes.show')
              ->with('teste', $teste);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testes  $testes
     * @return \Illuminate\Http\Response
     */
    public function edit(Testes $teste)
    {
        //
        $user = User::all();
        $procedure = Procedures::all();
        return view('testes.edit', ['user'=>$user],
                                   ['procedure'=> $procedure])
                                   ->with('teste', $teste);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testes  $testes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testes $teste)
    {
        //
        $teste->fill($request->all());
        $teste->save();
        session()->flash('mensagem','Teste atualizado com sucesso!');
        return redirect()->route('testes.show',$teste->id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testes  $testes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testes $teste)
    {
        $teste->delete();
        session()->flash('mensagem','Teste excluido com sucesso!!');
        return redirect()->route('testes.index');
    }
}
