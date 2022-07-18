@extends('template.users')
@section('title', "Usuário {$user->name}")
@section('body')



<h1>Usuário {{$user->name}}</h1>

@if($errors->any())

    <div class="alert alert-danger" role= "alert">
         @foreach($errors->all() as $error)
            {{ $error }}
          @endforeach
    </div>
@endif

<form action="{{ route('users.update', $user->id)}}" method= "POST">
    @method('PUT')
    @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }} "placeholder="name">
    
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control" id="email" value="{{ $user->email }} " placeholder="email">
  </div>
  <div class="form-group">
    <label for="password">senha</label>
    <input type="password" class="form-control" id="password" placeholder="password">
  </div>

  <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

@endsection