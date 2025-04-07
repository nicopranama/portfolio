@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">Edit Contact</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('contact.update', $contact) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Platform</label>
                    <select name="platform" class="form-control custom-input" required>
                        <option value="WhatsApp" {{ $contact->platform == 'WhatsApp' ? 'selected' : '' }}>WhatsApp</option>
                        <option value="Email" {{ $contact->platform == 'Email' ? 'selected' : '' }}>Email</option>
                        <option value="LinkedIn" {{ $contact->platform == 'LinkedIn' ? 'selected' : '' }}>LinkedIn</option>
                        <option value="GitHub" {{ $contact->platform == 'GitHub' ? 'selected' : '' }}>GitHub</option>
                        <option value="Instagram" {{ $contact->platform == 'Instagram' ? 'selected' : '' }}>Instagram</option>
                        <option value="X (Twitter)" {{ $contact->platform == 'X (Twitter)' ? 'selected' : '' }}>X (Twitter)</option>
                        <option value="Lainnya" {{ $contact->platform == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Username</label>
                    <input type="text" name="username" class="form-control custom-input" value="{{ $contact->username }}" placeholder="Enter username or email" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Contact Link</label>
                    <input type="url" name="link" class="form-control custom-input" value="{{ $contact->link }}" placeholder="Enter contact link" required>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-1 fw-semibold">Main Contact</label>
                    <div class="form-check">
                        <input type="checkbox" name="is_primary" class="form-check-input" value="1"
                               {{ $contact->is_primary ? 'checked' : '' }}>
                        <label class="form-check-label">Set as main contact</label>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-dark w-50 custom-button">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
