@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Skill</h4>
        <a href="{{ route('skills.create') }}" class="btn btn-dark custom-button">New Skill</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @foreach($categories as $category)
        <div class="card mb-3">
            <div class="card-header">{{ $category }}</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Skill Name</th>
                            <th>Proficiency Level</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($skills->where('category', $category) as $skill)
                        <tr>
                            <td>{{ $skill->name }}</td>
                            <td class="align-middle">
                                <div class="progress" align-items: center;>
                                    <div class="progress-bar" role="progressbar" 
                                         style="width: {{ $skill->proficiency_level }}%;" 
                                         aria-valuenow="{{ $skill->proficiency_level }}" 
                                         aria-valuemin="0" 
                                         aria-valuemax="100">
                                        {{ $skill->proficiency_level }}%
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                @if($skill->is_learning)
                                    <span class="badge bg-warning">Currently Learning</span>
                                @else
                                    <span class="badge bg-success">Proficient in</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('skills.edit', $skill) }}" class="btn btn-primary btn-sm custom-button-edit">Edit</a>
                                <form action="{{ route('skills.destroy', $skill) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm custom-button-delete" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
@endsection