<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'platform' => 'required|string|max:100',
            'username' => 'required|string|max:255',
            'link' => 'required|url',
            'is_primary' => 'boolean'
        ]);

        if ($request->is_primary) {
            Contact::where('is_primary', true)->update(['is_primary' => false]);
        }

        Contact::create($validatedData);

        return redirect()->route('contact.index')
            ->with('success', 'Contact successfully added.');
    }

    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'platform' => 'required|string|max:100',
            'username' => 'required|string|max:255',
            'link' => 'required|url',
            'is_primary' => 'boolean'
        ]);

        if ($request->is_primary) {
            Contact::where('is_primary', true)->update(['is_primary' => false]);
        }

        $contact->update($validatedData);

        return redirect()->route('contact.index')
            ->with('success', 'Contact successfully updated.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contact.index')
            ->with('success', 'Contact successfully deleted.');
    }
}