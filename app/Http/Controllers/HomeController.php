<?php

namespace App\Http\Controllers;

use App\Http\Requests\Home\CalculateRequest;
use App\Http\Requests\Home\ContactSaveRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use Inertia\Response;
use Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends Controller
{
    public function index(Request $request): Response
    {
        return Inertia::render('Home');
    }

    public function faq(Request $request): Response
    {
        return Inertia::render('Faq');
    }

    public function contact(Request $request): Response
    {
        return Inertia::render('Contact');
    }

    public function contactSave(ContactSaveRequest $request): RedirectResponse
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'text' => $request->text,
            'user_id' => Auth::id(),
            'is_sended' => false,
        ];
        Contact::create($data);
        // $isSended = Mail::to('info@matrycalosu.local')->send('test');

        return redirect()->back()->with(['isSended' => true]);
    }

    public function calculate(CalculateRequest $request): RedirectResponse
    {
        return to_route('home');
    }
}
