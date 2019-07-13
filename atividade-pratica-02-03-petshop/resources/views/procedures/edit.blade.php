@extends('principal')

@section('titulo', 'Editar Procedimento')

@section('conteudo')

  <h1 class="jumbotron">Editar Procedimento</h1>

  <form method="post" action="{{ route('procedures.update', $procedure->id) }}">

    @csrf
    @method('PATCH')

      <p class="form-group">
      Nome:
      <input class="form-control" typer="text" name="name" value="{{ $procedure->name}}">
      </p><br>

      <p class="form-group">
        Preço:
        <input class="form-control" typer="text" name="price" value="{{ $procedure->price}}">
      </p><br>

      <input type="submit" name="btnSalvar" value="Editar">
  </form>

@endsection
