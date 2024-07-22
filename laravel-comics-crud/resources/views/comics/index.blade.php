@extends('layouts.app')
@section('content')
<section>
    <div class="container d-flex flex-column">
        <button class="my-5 btn btn-danger"><a class="text-black" href="{{route('comics.create')}}">Crea nuovo Fumetto</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">COMPANY</th>
                    <th scope="col">GENERE</th>
                    <th scope="col">PRICE</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>
                            <a href="{{route('comics.show', $comic)}}">
                               {{$comic->title}}
                            </a>
                        </td>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->company}}</td>
                        <td>{{$comic->genre}}</td>
                        <td>{{$comic->price}}</td>
                        <td></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</section>
@endsection