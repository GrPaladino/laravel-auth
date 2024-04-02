@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Lista Progetti</h1>

    <div class="row">

        @forelse($projects as $project)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$project->image_preview}}" class="card-img-top" alt="{{$project->image_preview}}">
                <div class="card-body">
                    <h5 class="card-title text-bg-primary p-3">{{$project->title}}</h5>
                    <p class="card-text">{{$project->description}}</p>
                    <a href="{{$project->github_url}}">Github</a>
                    <a href="{{route('admin.projects.show', $project)}}" class="btn btn-primary d-block mt-3">Apri</a>
                </div>
            </div>
        </div>

        @empty
        <h2>Nessun Progetto trovato</h2>
        @endforelse


    </div>


</div>
@endsection
