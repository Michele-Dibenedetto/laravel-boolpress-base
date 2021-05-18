@extends('layout.app')

@section("title_page", "posts")

@section('content')
    <h1>Posts</h1>
    @foreach ($posts as $post)
        <div class="block_post">
            <div class="profile">
                <img class="picture_profile" src="{{$post->immagine_profilo}}" alt="">
                <div class="info">
                    <h2>{{$post->nome}}</h2>
                    <p>{{$post->data_publicazione}}</p>
                </div>
                <div class="buttons">
                    <button><a href="{{route("posts.show", $post->id)}}">Visualizza Post</a></button>
                    <button><a href="{{route("posts.edit", $post->id)}}">Modifica</a></button>
                    <form action="{{route("posts.destroy", $post->id)}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit">Cancella</button>
                    </form>
                </div>
            </div>
            <p class="text">{{$post->testo}}</p>
        </div>
    @endforeach
    <button><a href="{{route("posts.create")}}">Aggiungi post</a></button>
@endsection