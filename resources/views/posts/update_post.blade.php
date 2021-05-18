@extends('layout.app')

@section("title_page", "modifica post")

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form class="data_database" action="{{route("posts.update", $post->id)}}" method="post">
        @csrf
        @method("PUT")
        <label for="nome">Nome e cognome</label>
        <input type="text" id="nome" name="nome" value="{{$post->nome}}">

        <label for="date">Data di pubblicazione</label>
        <input type="date" id="data_publicazione" name="data_publicazione" value="{{$post->data_publicazione}}">

        <label for="immagine_profilo">Immagine del profilo</label>
        <textarea name="immagine_profilo" id="immagine_profilo">{{$post->immagine_profilo}}</textarea>

        <label for="testo">Testo</label>
        <textarea name="testo" id="testo">{{$post->testo}}</textarea>

        <button type="submit">Conferma modifica</button>
    </form>
@endsection