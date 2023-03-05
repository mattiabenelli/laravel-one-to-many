@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <h1 class="my-4">{{ $project->title }}</h1>
                    <h2>Contenuto:</h2>
                    <p>{{ $project->content }}</p>
                    <a href="{{ route('admin.projects.index') }}">Torna all'elenco</a>
                </div>
            </div>
            <div class="col-12">
            </div>
        </div>
    </div>
@endsection