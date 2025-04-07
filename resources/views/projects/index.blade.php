@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Project</h4>
        <a href="{{ route('projects.create') }}" class="btn btn-dark custom-button">New Project</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Tech Stack</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->status }}</td>
                <td>{{ $project->tech_stack }}</td>
                <td>
                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary btn-sm custom-button-edit">Edit</a>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm custom-button-delete" onclick="return confirm('Do you really want to delete this?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

