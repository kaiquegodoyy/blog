@extends('layouts.blog')

@section('content')

    <div class="row post">
        <h4> {{ $post->title }} </h4>
        <p>  {{ $post->content }} </p>
        <div class="col-4">
            <img class="profile mr-3" src="{{ url('image/kaique.jpg') }}" alt="Imagem não localizada">{{ $post->author }}
        </div>

        <div class="col-4">
            Tempo de leitura : {{ calculateTime($post->content) }}
        </div>


        <div class="col-4">
            Data: {{ $post->created_at }}
        </div>
    </div> 
        
@endsection