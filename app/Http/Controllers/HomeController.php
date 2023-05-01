<?php

namespace App\Http\Controllers;

use App\Http\Requests\Home\CalculateRequest;
use App\Http\Requests\Home\ContactSaveRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
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
        return to_route('contact');
    }

    public function calculate(CalculateRequest $request): RedirectResponse
    {
        return to_route('home');
    }
}
