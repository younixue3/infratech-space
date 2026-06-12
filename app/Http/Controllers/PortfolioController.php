<?php

namespace App\Http\Controllers;

use App\Services\ProjectService;
use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    public function __construct(
        protected ProjectService $projectService
    ) {}

    /**
     * Show the portfolio projects list page.
     */
    public function index(): View
    {
        $projects = $this->projectService->getAllProjects();
        
        // Extract unique categories for filtration UI
        $categories = $projects->pluck('category')->unique()->values();

        return view('portfolio', compact('projects', 'categories'));
    }
}
