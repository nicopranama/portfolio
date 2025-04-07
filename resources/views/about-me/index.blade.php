<!-- resources/views/about-me/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">About Me</h4>
    @if($aboutMe)
        <div class="card">
            <div class="card-body">
                <h5 class="mb-0.5">Description</h5>
                <p class="mb-2.5">{{ $aboutMe->description }}</p>
                <h5 class="mb-0.5">Education</h5>
                <p class="mb-4">{{ $aboutMe->university }} - {{ $aboutMe->major }}</p>
                <div class="text-center">
                    <a href="{{ route('about-me.edit') }}" class="btn btn-dark w-50 custom-button">Edit</a>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-warning" role="alert">
            Belum ada informasi
        </div>
        <a href="{{ route('about-me.create') }}" class="btn btn-dark custom-button">Add Information</a>
    @endif
</div>
@endsection