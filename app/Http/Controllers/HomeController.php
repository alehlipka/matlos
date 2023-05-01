<?php

namespace App\Http\Controllers;

use App\Http\Requests\Home\CalculateRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends Controller
{
    public function index(Request $request): Response
    {
        return Inertia::render('Home/Index');
    }

    public function faq(Request $request): Response
    {
        return Inertia::render('Home/Faq');
    }

    public function calculate(CalculateRequest $request): RedirectResponse
    {
        return to_route('home');
    }
}
