@extends('layouts.admin')
@section('content')

<h3>Lista de Posts</h3> <br>
<a class="btn btn-outline-success" href="{{ route('admin.posts.create') }}"> Cadastrar novo Post</a>

    <table class="table table-bordered table-hover">
        <thead class="bg-dark text-white">
            <tr>
                <th>Titulo</th>
                <th>Usuario</th>
                <th>Data de criação</th>
            </tr>
        </thead>

        @foreach ($posts as $post)
        <tr>
            <td> {{ $post->title  }} </td>
            <td> {{ $post->user_id }} </td>
            <td> {{ $post->created_at }} </td>
            <td><a class="btn btn-outline-primary" href="{{ route('admin.posts.edit',$post->id) }}"> Editar </a></td>
            <td> <a class="btn btn-outline-danger" href="{{ route('admin.posts.destroy',$post->id) }}"> Excluir </a></td>
        </tr>
        @endforeach

    </table>
@endsection
