<?php

namespace App\Http\Controllers;

use App\Services\ProjectService;
use App\Services\ServiceService;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __construct(
        protected ServiceService $serviceService,
        protected ProjectService $projectService
    ) {}

    /**
     * Show the landing page.
     */
    public function index(): View
    {
        $services = $this->serviceService->getActiveServices();
        $projects = $this->projectService->getFeaturedProjects(3);

        return view('home', compact('services', 'projects'));
    }
}
