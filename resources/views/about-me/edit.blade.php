@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Edit About Me</h4>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('about-me.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Description</label>
                    <textarea name="description" class="form-control custom-input">{{ $aboutMe->description ?? '' }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">University</label>
                    <input type="text" name="university" class="form-control custom-input" value="{{ $aboutMe->university ?? '' }}">
                </div>
                <div class="form-group mb-5">
                    <label class="mb-1 fw-semibold">Major</label>
                    <input type="text" name="major" class="form-control custom-input" value="{{ $aboutMe->major ?? '' }}">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark w-50 custom-button">Save</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
