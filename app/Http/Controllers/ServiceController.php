<?php

namespace App\Http\Controllers;

use App\Services\ServiceService;
use Illuminate\Contracts\View\View;

class ServiceController extends Controller
{
    public function __construct(
        protected ServiceService $serviceService
    ) {}

    /**
     * Show the detailed services page.
     */
    public function index(): View
    {
        $services = $this->serviceService->getActiveServices();

        return view('services', compact('services'));
    }
}
