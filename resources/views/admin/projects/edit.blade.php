@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="text-center">
            Modifica {{ $project->title }}
        </h2>
        <div class="row justify-content-center">
            <div class="col-8">
                @include('partials.errors')
                <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ old('title', $project->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" rows="10" class="form-control">{{ old('description', $project->description) }}</textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
