@extends('principal')

@section('titulo', 'Editar Procedimento')

@section('conteudo')

  <h1 class="jumbotron">Editar Procedimento</h1>

  <form method="post" action="{{ route('testes.update', $teste->id) }}">

    @csrf
    @method('PATCH')

    <p class="form-group">Procedimento: </p>
    <select  class="form-control"  name="user_id">
      @foreach($procedure as $p)
        @if($p->id == $teste->procedure_id)
          <option value="{{$teste->procedure_id}}" selected>{{ $p->name }}</option>
        @endif
      @endforeach
    </select><br>

    <p class="form-group">Cliente: </p>
    <select  class="form-control"  name="user_id">
      @foreach($user as $u)
        @if($u->id == $teste->user_id)
          <option value="{{ $teste->user_id }}" selected>{{ $u->name }}</option>
        @endif
      @endforeach
    </select><br>
  </form>
@endsection
