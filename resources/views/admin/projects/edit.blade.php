@extends('layouts.app')

@section('title', 'Modifica progetto')

@section('content')
<section>
    <div class="container py-4">

        <a href="{{route('admin.projects.index')}}" class="btn btn-primary my-3">Torna alla lista</a>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#project-{{$project->id}}">
            Elimina
        </button>



        <h1 class="my-3">Aggiungi nuovo Progetto</h1>
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title" class="form-label">Titolo: </label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" />

            <label for="github_url" class="form-label">Github: </label>
            <input type="url" class="form-control" id="github_url" name="github_url" value="{{ $project->github_url }}" />

            <label for="image_preview" class="form-label">Immagine: </label>
            <input type="url" class="form-control" id="image_preview" name="image_preview" value="{{ $project->image_preview }}" />




            <label for="description" class="form-label">Descrizione: </label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $project->description }}</textarea>

            <button type="submit" class="btn btn-success mt-2"><i class="fa-solid fa-floppy-disk me-2"></i>Salva</button>
        </form>

    </div>
</section>
@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection


@section('modal')
<!-- Modal -->
<div class="modal fade" id="project-{{$project->id}}" tabindex="-1" aria-labelledby="project-{{$project->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminare {{$project->title}}?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                L'azione é irreversibile.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>
        </div>
    </div>
</div>



@endsection