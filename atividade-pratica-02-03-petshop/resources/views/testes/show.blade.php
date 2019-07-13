@extends('principal')

@section('titulo', 'Exibir Exames')

@section('conteudo')

  <div class="jumbotron">
  </div>
  <h2>Edição de Exames</h2>
  <div class="jumbotron">
    <h2 class="mb-4">Descrição: </h2>
        <p>Exame:
          {{-- {{ $teste->procedure->name }} --}}
        </p>
        <br>
        <p>Usuário:
          {{-- {{ $teste }} --}}
        </p>
        <br>
        <p>Data:
          {{ $teste->data }}
        </p>
        <br>
    <a class="btn btn-light m-3" href="{{ route('testes.index') }}">Voltar</a>
    {{-- <a class="btn btn-light" href="{{ route('testes.edit', $teste->id) }}">Editar</a> --}}
  </div>

  {{-- <form method="post" action="{{ route('testes.destroy', $teste->id) }}" onsubmit="return confirm('Confirma exclusão da teste?');" > --}}

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>


@endsection
