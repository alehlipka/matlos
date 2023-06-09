<?php

namespace App\Http\Controllers;

use App\Http\Requests\Home\ContactSaveRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ContactController extends Controller
{
    public function index(Request $request): Response
    {
        $data = [
            'saved' => $request->session()->get('status', false)
        ];
        
        return Inertia::render('Contact', $data);
    }

    public function save(ContactSaveRequest $request): RedirectResponse
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text,
            'user_id' => Auth::id(),
            'is_sended' => false,
        ];

        $contact = Contact::create($data);

        return redirect()->back()->with(['status' => isset($contact)]);
    }
}
