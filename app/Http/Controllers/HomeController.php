<?php

namespace App\Http\Controllers;

use App\Http\Requests\Home\CalculateRequest;
use App\Http\Requests\Home\ContactSaveRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends Controller
{
    public function index(Request $request): Response
    {
        $data = [
            'calculated' => $request->session()->get('status', false)
        ];

        return Inertia::render('Home', $data);
    }

    public function calculate(CalculateRequest $request): RedirectResponse
    {
        return redirect()->back()->with(['status' => true]);
    }
}
