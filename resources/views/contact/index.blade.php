@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">Contact</h4>
        <a href="{{ route('contact.create') }}" class="btn btn-dark custom-button">New Contact</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-sm">
        <thead>
            <tr>
                <th class="py-1 px-2 w-25">Platform</th>
                <th class="py-1 px-2 w-25">Username</th>
                <th class="py-1 px-2 text-center">Link</th>
                <th class="py-1 px-2 w-25 text-center">Primary</th>
                <th class="py-1 px-2 w-25 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td class="py-2">{{ $contact->platform }}</td>
                <td class="py-2">{{ $contact->username }}</td>
                <td class="py-2">
                    <a href="{{ $contact->link }}" target="_blank" style="font-weight: 400; color: #000000; text-decoration: none;">{{ $contact->link }}</a>
                </td>
                <td class="py-2 text-center">
                    @if($contact->is_primary)
                        <span class="badge bg-primary">Main</span>
                    @endif
                </td>
                <td class="py-2 text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('contact.edit', $contact) }}" class="btn btn-sm btn-primary custom-button-edit">Edit</a>
                        <form action="{{ route('contact.destroy', $contact) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger custom-button-delete" onclick="return confirm('Do you really want to delete this?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
