@extends('principal')

@section('titulo', 'Exibir Procedimento')

@section('conteudo')

  <div class="jumbotron">
  </div>
  <h2>Edição de Procedimento</h2>
  <div class="jumbotron">
    <h2 class="mb-4">Descrição: </h2>
    <p>Procedimento: {{ $procedure->name }}</p>
    <br>
    <p>Preço: R$ {{ $procedure->price }}</p>
    <a class="btn btn-light m-3" href="{{ route('procedures.index') }}">Voltar</a>
    <a class="btn btn-light" href="{{ route('procedures.edit', $procedure->id) }}">Editar</a>
  </div>

  <form method="post" action="{{ route('procedures.destroy', $procedure->id) }}" onsubmit="return confirm('Confirma exclusão da procedimento?');" >

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>


    <script>
      console.log({{ $procedure->id}});
    </script>

@endsection
