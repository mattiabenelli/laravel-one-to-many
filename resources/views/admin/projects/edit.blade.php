@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-12">
            <h2 class="py-3">Modifica il progetto</h2>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-12 py-3">
            <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group my-3">
                    <label class="control-label">Titolo</label>
                    <input type="text" class="form-control" placeholder="Title" id="title" name="title" value="{{ old('title') ?? $project->title }}">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="text-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                </div>
                <div class="form-group my-3">
                    <label class="control-label">Contenuto</label>
                    <textarea type="text" class="form-control" placeholder="Contenuto" id="content" name="content">{{ old('content') ?? $project->content }}</textarea>
                </div>
                <div class="form-group my-3">
                    <button type="submit" class="btn btn-sm btn-success">Modifica progetto</button>
                </div>
            </form>
        </div>
    </div>
@endsection