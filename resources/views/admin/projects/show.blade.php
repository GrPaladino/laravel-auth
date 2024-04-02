@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="container mt-4">

    <a href="{{route('admin.projects.index')}}" class="btn btn-primary my-3">Torna alla lista</a>
    <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-primary my-3">Modifica</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#project-{{$project->id}}">
        Elimina
    </button>




    <div class="card" style="width: 18rem;">
        <img src="{{$project->image_preview}}" class="card-img-top" alt="{{$project->image_preview}}">
        <div class="card-body">
            <h5 class="card-title text-bg-primary p-3">{{$project->title}}</h5>
            <p class="card-text">{{$project->description}}</p>
            <a href="{{$project->github_url}}" class="btn btn-dark d-block mt-3">
                <i class="fa-brands fa-github me-2"></i>Github</a>
        </div>
    </div>
</div>
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
