@extends('layouts.blog')

@section('content')

@foreach ($posts as $post)
    <div class="row post">
        <h4> {{ $post->title }} </h4>
        <p> {{ $post->content }} </p>
        <div class="col-md-8 col-sm-12">
            <img class="profile mr-3" src="{{ url('image/kaique.jpg') }}" alt="Imagem não localizada">{{ $post->author }}
        </div>
        <div class="col-md-4">
            Data: {{ $post->created_at }}
        </div>
    </div>    
@endforeach

{{ $posts->links() }}




@endsection

