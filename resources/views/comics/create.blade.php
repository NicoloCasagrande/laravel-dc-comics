@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Aggiungi un fumetto</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" max-lenth="50" required value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" required value="{{ old('description') }}"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Link immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" max-lenght="200" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="float" class="form-control @error('price') is-invalid @enderror" name="price" id="price" required value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" max-length="50" required value="{{ old('series') }}">
                @error('series')
                    <div class="alert alert-danger">{{ $message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sales_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" required value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" max-length="50" required value="{{ old('type') }}">
                @error('type')
                    <div class="alert alert-danger">{{ $message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-primary">Annulla</button>
        </form>
        <a href="{{route('comics.index')}}" class="btn btn-primary my-5">Torna alla Homepage</a>
    </div>
@endsection