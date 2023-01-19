@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1 class="mb-4">Lista Comics</h1>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$comic->title}}</h5>
                          <p class="card-text">Price: {{$comic->price}}</p>
                          <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Piu info</a>
                        </div>
                      </div>
                </div>
            @endforeach
            <a href="{{route('comics.create')}}" class="btn btn-primary my-5">Aggiungi un nuovo fumetto</a>
        </div>
    </div>
@endsection