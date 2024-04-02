@extends('layouts.app')

@section('content')
<div class="container mb-4">
    <h1 class="my-4">Lista Progetti</h1>

    <a href="{{route('admin.projects.create')}}" class="btn btn-primary mb-4">Inserisci nuovo progetto</a>

    <div class="row g-4">

        @forelse($projects as $project)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{$project->image_preview}}" class="card-img-top" alt="{{$project->image_preview}}">
                <div class="card-body">
                    <h5 class="card-title text-bg-info text-white p-3">{{$project->title}}</h5>
                    <p class="card-text">{{$project->description}}</p>
                    <a href="{{$project->github_url}}"><i class="fa-brands fa-github fa-xl link-dark"></i></a>
                    <a href="{{route('admin.projects.show', $project)}}" class="btn btn-secondary d-block mt-3">Apri</a>
                </div>
            </div>
        </div>

        @empty
        <h2>Nessun Progetto trovato</h2>
        @endforelse


    </div>


</div>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
