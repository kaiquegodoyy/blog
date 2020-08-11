@extends('layouts.admin')
@section('content')

<div>
    {{ @session('message') }}
</div>

<form method="POST" action=" {{ route('admin.posts.update') }} ">
    @csrf

    <div class="form-group">
        
        <label for="title">Título :</label> <br>
        <input class="form-control" name="title" value="{{ old('title', $post->title) }}" type="text">
        @error('title')
            {{ $message }}
        @enderror
        <br>

        <label for="content">Conteudo do Post :</label><br>
        <textarea class="form-control" name="content" id="" cols="30" rows="10">
        {{ old('content', $post->content) }} 
        </textarea> <br>
        @error('content')
            {{ $message }}
        @enderror

        <input name="id" type="hidden" value="{{ $post->id }}">
        
        <br>
        <input class="btn btn-success" type="submit" value="Atualizar">
        <a class="btn btn-primary" href=" {{ route('admin.posts') }} ">Voltar</a>

    </div>
</form>
@endsection