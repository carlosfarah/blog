@extends('template')

@section('content')
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>

        <p>Tags:</p>
        <ul>
            @foreach($post->tags AS $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>

        @foreach($post->comments as $comment)
            <h3>Comentários</h3>
            <b>Nome: </b> {{ $comment->name }} | <small><b>criado em: </b>{{ $comment->created_at }}</small><br/>
            <b>Comentário: </b> {{ $comment->comment }}
        @endforeach
        <hr/>
    @endforeach
@endsection