@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Aggiungi un fumetto</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" max-lenth="50" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Link immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" max-lenght="200">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="float" class="form-control" name="price" id="price" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" max-length="50" required>
            </div>
            <div class="mb-3">
                <label for="sales_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" max-length="50" required>
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-primary">Annulla</button>
        </form>
        <a href="{{route('comics.index')}}" class="btn btn-primary my-5">Torna alla Homepage</a>
    </div>
@endsection