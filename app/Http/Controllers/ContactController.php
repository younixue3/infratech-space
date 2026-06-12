<?php

namespace App\Http\Controllers;

use App\DTOs\InquiryDTO;
use App\Http\Requests\StoreInquiryRequest;
use App\Services\InquiryService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function __construct(
        protected InquiryService $inquiryService
    ) {}

    /**
     * Show the contact page with inquiry form.
     */
    public function index(): View
    {
        return view('contact');
    }

    /**
     * Handle contact form submission.
     */
    public function store(StoreInquiryRequest $request): RedirectResponse
    {
        // 1. Transform request to safe DTO
        $dto = InquiryDTO::fromRequest($request);

        // 2. Submit via business service
        $this->inquiryService->submitInquiry($dto);

        // 3. Redirect back with dynamic success notice
        return back()->with('success', 'Pesan Anda telah berhasil dikirim! Tim Infratech Borneo akan segera menghubungi Anda melalui email atau telepon.');
    }
}
