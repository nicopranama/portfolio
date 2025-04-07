@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Edit Project</h4>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('projects.update', $project) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Project Title</label>
                    <input type="text" name="title" class="form-control custom-input" value="{{ $project->title }}" required>
                </div>
                
                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Description</label>
                    <textarea name="description" class="form-control custom-input">{{ $project->description }}</textarea>
                </div>
                
                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Tech Stack</label>
                    <input type="text" name="tech_stack" class="form-control custom-input" value="{{ $project->tech_stack }}">
                </div>
                
                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">GitHub Link</label>
                    <input type="url" name="github_link" class="form-control custom-input" value="{{ $project->github_link }}">
                </div>
                
                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Demo Link</label>
                    <input type="url" name="demo_link" class="form-control custom-input" value="{{ $project->demo_link }}">
                </div>
                
                <div class="form-group mb-5">
                    <label class="mb-1 fw-semibold">Status</label>
                    <select name="status" class="form-control custom-input">
                        <option value="development" {{ $project->status == 'development' ? 'selected' : '' }}>Development</option>
                        <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="on-hold" {{ $project->status == 'on-hold' ? 'selected' : '' }}>On-hold</option>
                    </select>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-dark w-50 custom-button">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
