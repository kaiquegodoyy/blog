@extends('layouts.admin')
@section('content')

<div>
    {{ @session('message') }}
</div>

<form method="POST" action="{{ route('admin.users.update') }}">
    <div class="form-group">

    @csrf

    <label for="name">Nome</label>
    <input class="form-control" name="name" value="{{ old('name',$user->name) }}" type="text">

    @error('name')
        <div>{{ $message }}</div>
    @enderror

    <br/>

    <label for="email">E-mail</label>
    <input class="form-control" name="email" value="{{ old('email',$user->email) }}" type="text">
    @error('email')
        <div>{{ $message }}</div>
    @enderror

    <input name="id" type="hidden" value="{{ $user->id }}">


    <br/>
    <input class="btn btn-success" type="submit" value="Atualizar">
    <a class="btn btn-primary" href=" {{ route('admin.users') }}">Voltar</a>
    
    </div>
</form>

@endsection