@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <h1>{{$comic->title}}</h1>
        <strong>{{$comic->description}}</strong>
        <p>{{$comic->genre}}</p>
        <strong>{{$comic->price}}</strong>
        <p>{{$comic->company}}</p>
    </div>
</section>
@endsection