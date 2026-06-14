<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function store(Request $request): RedirectResponse
    {
        return back()->with('success', 'Pesan Anda telah berhasil dikirim! Tim Infratech Borneo akan segera menghubungi Anda melalui email atau telepon.');
    }
}
