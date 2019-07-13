@extends('principal')

@section('titulo', 'Inserir Exames')

@section('conteudo')

  <h1 class="jumbotron m-5">Exames - Agendamentos</h1>

  <form method="post" action="{{ route('testes.store') }}">

    @csrf
    <p class="form-group">Cliente: </p>
    <select  class="form-control"  name="user_id">
      @foreach($user as $u)
        <option value="{{ $u->id }}">{{ $u->name }}</option>
      @endforeach
    </select><br>

    <p class="form-group">Procedimento: </p>
    <select  class="form-control"  name="procedure_id">
      @foreach($procedure as $p)
        <option value="{{ $p->id }}">{{ $p->name }}</option>
      @endforeach
    </select><br>

    <p class="form-group">Data: <input class="form-control" type="date" name="date">
    </p><br>


<input class="btn btn-success" type="submit" name="btnSalvar" value="Incluir">

  </form>
@endsection
