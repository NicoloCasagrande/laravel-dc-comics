@extends('layouts.main')

@section('page-content')
    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>
    <span>{{$comic->price}}</span>
    <span>{{$comic->sales_date}}</span>
    <span style="display:block">{{$comic->type}}</span>
    <a style="display:inline-block" href="{{route('comics.index')}}" class="btn btn-primary my-5">Torna alla Homepage</a>
@endsection