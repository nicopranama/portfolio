@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Add New Skill</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('skills.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Skill Name</label>
                    <input type="text" name="name" class="form-control custom-input" placeholder="Enter skill name" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Proficiency Level (%)</label>
                    <input type="number" name="proficiency_level" class="form-control custom-input" 
                           min="0" max="100" placeholder="Enter skill level" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Category</label>
                    <select name="category" class="form-control custom-input" required>
                        <option value="Mobile Development">Mobile Development</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Database">Database</option>
                        <option value="DevOps">DevOps</option>
                        <option value="Ai & Data Science">Ai & Data Science</option>
                        <option value="Blockchain">Blockchain</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group mb-5">
                    <label class="mb-1 fw-semibold">Status</label>
                    <div class="form-check">
                        <input type="checkbox" name="is_learning" class="form-check-input" value="1">
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
