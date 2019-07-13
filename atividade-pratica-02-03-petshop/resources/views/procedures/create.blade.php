@extends('principal')

@section('titulo', 'Inserir Procedimentos')

@section('conteudo')

  <h1 class="jumbotron m-5">Inserir novo procedimento</h1>

  <form method="post" action="{{ route('procedures.store') }}">

    @csrf

      <p class="form-group">Nome: <input class="form-control" type="text" name="name"></p><br>
      <p class="form-group">Preço: <input class="form-control" type="number" name="price"></p><br>
      <p class="form-group">Usuário: </p>
      <select  class="form-control"  name="user_id">
        @foreach($user as $u)
          <option value="{{ $u->id }}">{{ $u->name }}</option>
        @endforeach
      </select><br>
      <input class="btn btn-success" type="submit" name="btnSalvar" value="Incluir">
  </form>
@endsection
