<?php

namespace App\Http\Controllers;

use App\Services\HistoryService;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    public function __construct(
        protected HistoryService $historyService
    ) {}

    /**
     * Show the About Us page.
     */
    public function index(): View
    {
        $timeline = $this->historyService->getCompanyTimeline();

        return view('about', compact('timeline'));
    }
}
