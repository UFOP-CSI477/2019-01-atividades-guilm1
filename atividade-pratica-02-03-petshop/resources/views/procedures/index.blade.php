@extends('principal')

@section('titulo', 'Procedimentos')

@section('conteudo')

  <div class="btn btn-light mt-5">
      <a class="btn btn-link" href={{route('procedures.create')}}>Inserir</a>
  </div>

  <table class="table table-bordered table-hover table-striped">
    <caption>Procedimentos</caption>
    <thead class="thead-dark">
      <tr>
        <th>Procedimento</th>
        <th>Preço</th>
        <th>Criado em:</th>
      </tr>
    </thead>
    <tbody>
  @foreach($procedure as $p)
    <tr>
      <td> {{$p->name}}</td>
      <td><a href="{{ route('procedures.show', $p->id) }}">R$ {{ $p->price }}</a></td>
      <td><a href="{{ route('procedures.show', $p->id)}}"> {{ $p->created_at}}</a></td>
    </tr>
  @endforeach
  </tbody>
  </table>

@endsection
