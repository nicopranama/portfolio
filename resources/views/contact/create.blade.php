@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-4">New Contact</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Platform</label>
                    <select name="platform" class="form-control custom-input" required>
                        <option value="WhatsApp">WhatsApp</option>
                        <option value="Email">Email</option>
                        <option value="LinkedIn">LinkedIn</option>
                        <option value="GitHub">GitHub</option>
                        <option value="Instagram">Instagram</option>
                        <option value="X (Twitter)">X (Twitter)</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Username</label>
                    <input type="text" name="username" class="form-control custom-input" placeholder="Enter username or email" required>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-1 fw-semibold">Contact Link</label>
                    <input type="url" name="link" class="form-control custom-input" placeholder="Enter contact link" required>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-1 fw-semibold">Main Contact</label>
                    <div class="form-check">
                        <input type="checkbox" name="is_primary" class="form-check-input" value="1">
                        <label class="form-check-label">Set as main contact</label>
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
