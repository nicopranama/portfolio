@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Create About Me</h4>
    <form action="{{ route('about-me.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Education</label>
            <input type="text" name="education" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Major</label>
            <input type="text" name="major" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">University</label>
            <input type="text" name="university" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Additional Info</label>
            <textarea name="additional_info" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-dark custom-button">Submit</button>
    </form>
</div>
@endsection