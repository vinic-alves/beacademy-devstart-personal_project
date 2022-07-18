@extends('template.users')
@section('title', 'Novo Usuário')
@section('body')



<h1>Novo Usuário</h1>

@if($errors->any())

    <div class="alert alert-danger" role= "alert">
         @foreach($errors->all() as $error)
            {{ $error }}
          @endforeach
    </div>
@endif

<form action="{{ route('users.store')}}" method= "POST">
    @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome" placeholder="name">
    
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control" id="email" placeholder="email">
  </div>
  <div class="form-group">
    <label for="password">senha</label>
    <input type="password" class="form-control" id="password" placeholder="password">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection