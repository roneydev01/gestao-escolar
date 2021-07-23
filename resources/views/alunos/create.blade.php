@extends('layout')

 @section('titulo', 'Novo Aluno')

 @section('content')
  <h3>Novo Aluno</h3>
  <form method="POST" action="{{route('alunos.store')}}">
     
    @include('alunos._form')
  
  </form>
 @endsection