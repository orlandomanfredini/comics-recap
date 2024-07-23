@extends('layouts.app')
@section('content')
<section style="height:100vh">
    <div class="container">
        <h1>{{$comic->title}}</h1>
        <strong>{{$comic->description}}</strong>
        <p>{{$comic->genre}}</p>
        <strong>{{$comic->price}}</strong>
        <p>{{$comic->company}}</p>
    </div>
    <div class="d-flex justify-content-center gap-5">
        <button class="btn btn-primary">
            <a class="text-white" href="{{route('comics.edit', $comic)}}">Modifica</a>
        </button>
        
    </div>
</section>
@endsection