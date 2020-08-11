@extends('layouts.admin')
@section('content')

<form method="post" action=" {{ route('admin.posts.store') }} ">
    <div class="form-group">
    @csrf
    <label for="title">Título</label> <br>
    <input class="form-control" name="title" type="text">
    @error('title')
        {{ $message }}
    @enderror
    <br>

    <label for="content">Conteudo do Post</label><br>
    <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea> <br>
    @error('content')
        {{ $message }}
    @enderror
     
    
    <input class="btn btn-success" type="submit" value="Cadastrar">
    <a class="btn btn-primary" href=" {{ route('admin.posts') }} ">Voltar</a>
</div>
</form>
@endsection