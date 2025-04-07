@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Edit Skill</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('skills.update', $skill) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Skill Name</label>
                    <input type="text" name="name" class="form-control custom-input" value="{{ $skill->name }}" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Proficiency Level (%)</label>
                    <input type="number" name="proficiency_level" class="form-control custom-input" 
                           min="0" max="100" value="{{ $skill->proficiency_level }}" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Category</label>
                    <select name="category" class="form-control custom-input" required>
                        <option value="Mobile Development" {{ $skill->category == 'Mobile Development' ? 'selected' : '' }}>Mobile Development</option>
                        <option value="Web Development" {{ $skill->category == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                        <option value="Database" {{ $skill->category == 'Database' ? 'selected' : '' }}>Database</option>
                        <option value="DevOps" {{ $skill->category == 'DevOps' ? 'selected' : '' }}>DevOps</option>
                        <option value="Ai & Data Science" {{ $skill->category == 'Ai & Data Science' ? 'selected' : '' }}>Ai & Data Science</option>
                        <option value="Blockchain" {{ $skill->category == 'Blockchain' ? 'selected' : '' }}>Blockchain</option>
                        <option value="Other" {{ $skill->category == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <div class="form-group mb-5">
                    <label class="mb-1 fw-semibold">Status</label>
                    <div class="form-check">
                        <input type="checkbox" name="is_learning" class="form-check-input" value="1"
                               {{ $skill->is_learning ? 'checked' : '' }}>
                        <label class="form-check-label">Currently Learning</label>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-dark w-50 custom-button">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
