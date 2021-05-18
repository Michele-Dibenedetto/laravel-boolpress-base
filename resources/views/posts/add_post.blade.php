@extends('layout.app')

@section("title_page", "nuovo post")

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form class="data_database" action="{{route("posts.store")}}" method="post">
        @csrf
        @method("POST")
        <label for="nome">Nome e cognome</label>
        <input type="text" id="nome" name="nome" value="{{old("nome")}}">

        <label for="date">Data di pubblicazione</label>
        <input type="date" id="data_publicazione" name="data_publicazione" value="{{old("data_publicazione")}}">

        <label for="immagine_profilo">Immagine del profilo</label>
        <textarea name="immagine_profilo" id="immagine_profilo" cols="30" rows="10">{{old("immagine_profilo")}}</textarea>

        <label for="testo">Testo</label>
        <textarea name="testo" id="testo" cols="30" rows="10">{{old("testo")}}</textarea>

        <button type="submit">Posta</button>
    </form>
@endsection