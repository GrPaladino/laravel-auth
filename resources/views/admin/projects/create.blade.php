@extends('layouts.app')

@section('title', 'Crea nuovo progetto')

@section('content')
<section>
    <div class="container py-4">

        <a href="{{route('admin.projects.index')}}" class="btn btn-primary my-3">Torna alla lista</a>

        <h1 class="my-3">Aggiungi nuovo Progetto</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title" class="form-label">Titolo: </label>
            <input type="text" class="form-control" id="title" name="title" />

            <label for="github_url" class="form-label">Github: </label>
            <input type="url" class="form-control" id="github_url" name="github_url" />

            <label for="image_preview" class="form-label">Immagine: </label>
            <input type="url" class="form-control" id="image_preview" name="image_preview" />




            <label for="description" class="form-label">Descrizione: </label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>

            <button type="submit" class="btn btn-secondary mt-2"><i class="fa-solid fa-floppy-disk me-2"></i>Salva</button>
        </form>

    </div>
</section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
