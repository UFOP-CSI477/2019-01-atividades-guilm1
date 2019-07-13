@extends('principal')

@section('titulo', 'Exames')

@section('conteudo')

  <div class="btn btn-light mt-5">
      <a class="btn btn-link" href={{route('testes.create')}}>Solicitar</a>
  </div>

  <table class="table table-bordered table-hover table-striped">
    <caption>Exames</caption>
    <thead class="thead-dark">
      <tr>
        <th>Exames</th>
        <th>Usuário</th>
        <th>Data</th>
        <th>criado em:</th>
      </tr>
    </thead>
    <tbody>
  @foreach($teste as $t)
    <tr>
      @foreach($procedure as $p)
        @if ($p->id == $t->procedure_id)
          <td> {{$p->name}}</td>
        @endif
      @endforeach

      @foreach($user as $u)
        @if ($t->user_id == $u->id)
          <td> {{$u->name}}</td>
        @endif
      @endforeach
      <td><a href="{{ route('testes.show', $t->id)}}"> {{ $t->date}}</a></td>
      <td><a href="{{ route('testes.show', $t->id)}}"> {{ $t->created_at}}</a></td>
    </tr>
  @endforeach
  </tbody>
  </table>
@endsection
