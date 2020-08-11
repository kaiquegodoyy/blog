@extends('layouts.admin')
@section('content')
   
    @if(@session('message'))
        <div class="alert alert-success" role="alert">
            {{ @session('message') }}
        </div>
    @endif

<h3>Cadastrar novo Usuário</h3> <br>

<form method="post" action="{{ route('admin.users.store') }}">
    <div class="form-group">
        
    @csrf

    <label for="name">Nome</label>
    <input class="form-control" name="name" value="{{ old('name') }}" type="text">

    @error('name')
        <div>{{ $message }}</div>
    @enderror

    <br/>

    <label for="email">E-mail</label>
    <input class="form-control"  name="email" value="{{ old('email') }}" type="text">
    @error('email')
        <div>{{ $message }}</div>
    @enderror

    <br/>
    
    <label for="password">Senha</label>
    <input class="form-control" name="password" type="password">
    @error('password')
        <div>{{ $message }}</div>
    @enderror

    <br/>
    <input class="btn btn-success" type="submit" value="Cadastrar">
    <a class="btn btn-primary" href=" {{ route('admin.users') }} ">Voltar</a>
</div>

</form>

@endsection