@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-start mt-4">
            <a class="btn btn-success" href="{{ route('admin.projects.index') }}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <h2 class="text-center">{{ $project->title }}</h2>
        <p class="mt-3">{{ $project->description }}</p>
    </div>
@endsection
