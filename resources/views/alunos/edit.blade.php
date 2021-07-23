@extends('layout')

 @section('titulo', 'Editar Aluno')

 @section('content')
  <h3>Novo Aluno</h3>
  <form method="POST" action="{{route('alunos.update', $aluno)}}">
    @method('PUT')
    
    @include('alunos._form')
  
  </form>
 @endsection