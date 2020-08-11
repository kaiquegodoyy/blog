@extends('layouts.admin')

@section('content')

<h3>Meus Dados :</h3> <br>

    <table class="table table-bordered">
        
        <tr>
            <th scope="col" class="table-dark">Nome :</th>
            <td>{{ $user->name }}</td>      
        </tr>

        <tr>
            <th scope="col" class="table-dark">Email :</th>
            <td>{{ $user->email }}</td>     
        </tr>

    </table>

@endsection