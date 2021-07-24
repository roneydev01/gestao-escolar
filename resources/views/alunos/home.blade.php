@extends('layout')

@section('titulo', 'Alunos')

@section('content')

<h3>Lista de Alunos</h3>

  <form method="GET" action="{{route('alunos.index')}}" class="row g-3 mb-3">
    <div class="col">
      <input type="search" class="form-control" id ="search" name = "search" value="{{$busca}}" placeholder="Buscar Alunos" aria-label="Search">
    </div>
    <div class="col">
      <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </div>
  </form>

  <table class="table table-striped table-hover">
      <thead class="table-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Email</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @if($busca && count($alunos) <= 0 )
        <tr>
          <th ></th>
          <td>Nenhum registro encontrado.</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      @else
        @forelse ($alunos as $aluno)
          <tr>
            <th scope="row">{{$aluno->id}}</th>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->telefone}}</td>
            <td>{{$aluno->email}}</td>
            <td>
              <a href="{{route('alunos.edit', $aluno)}}" class="btn btn-success">Editar</a>
              <a href="{{route('alunos.destroy', $aluno)}}" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
            </td>
          </tr>
          @empty
            <tr>
              <th ></th>
              <td>Nenhum registro cadastrado.</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
        @endforelse
      @endif
    </tbody>
  </table>
  {{$alunos->links()}}
  <a href="{{route('alunos.create')}}" class="btn btn-primary" role="button">Novo aluno</a>

@endsection