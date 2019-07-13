<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Procedures;
use Illuminate\Support\Facades\Auth;


class ProceduresController extends Controller
{
  public function index()
  {
    $procedure = Procedures::all();
    $user = User::all();
    return view ('procedures.index', ['user' => $user])
                  ->with('procedure', $procedure);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $user = User::all();
      if(Auth::check()){
      return view('procedures.create',
          ['user' => $user ]);
        }else{
          session()->flash('mensagem', 'Faça Login!');
          return view ('procedures.index');
        }
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Procedures::create($request->all());
      if(Auth::check()){
    return redirect()->route('procedures.index');
  }else{
    session()->flash('mensagem', 'Faça Login!');
    return view('procedures.index');
  }
  }
  /**
   * Display the specified resource.
   *
   * @param  \App\Procedures  $procedures
   * @return \Illuminate\Http\Response
   */
  public function show(Procedures $procedure)
  {
      return view('procedures.show')
             ->with('procedure',$procedure);
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Procedures  $procedures
   * @return \Illuminate\Http\Response
   */
  public function edit(Procedures $procedure)
  {
    $user = User::all();
      if(Auth::check()){
    return view('procedures.edit',
        [ 'procedure' => $procedure ,
          'user' => $user] );
        }else{
          session()->flash('mensagem', 'Faça Login!');
          return view('procedures.index');
        }
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Procedure  $procedures
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Procedures $procedure)
  {
    $procedure->fill($request->all());
    $procedure->save();
    session()->flash('mensagem', 'Procedure atualizada com sucesso!');
    return redirect()->route('procedures.index');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Procedures  $procedures
   * @return \Illuminate\Http\Response
   */
  public function destroy(Procedures $procedure)
  {
      if(Auth::check()){
      $procedure->delete();
      session()->flash('mensagem','Cidade Excluída com sucesso!');
      return redirect()->route('procedures.index');
    }else{
      session()->flash('mensagem', 'Faça Login!');
      return view('procedures.index');
    }
  }
}
