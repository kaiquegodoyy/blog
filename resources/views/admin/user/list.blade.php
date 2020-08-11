@extends('layouts.admin')

@section('content')

<h3>Lista de Usuários</h3><br>

<a class="btn btn-outline-success" href="{{ route('admin.users.create') }}"> Cadastrar novo usuário</a> <br>

    @if (@session('message'))
        <div class="alert alert-warning" role="alert">
            {{ @session('message') }}
        </div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="bg-dark text-white">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>

        @foreach($users as $user)
        <tbody>
            <tr>
                <th> {{ $user->id }} </th>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>
                <td> <a class="btn btn-outline-primary" href="{{ route('admin.users.edit',$user->id) }}"> Editar </a></td>
                <td> <a class="btn btn-outline-danger" href="{{ route('admin.users.destroy',$user->id) }}"> Excluir </a></td>
            </tr>
        </tbody>
        @endforeach

    </table>

@endsection
