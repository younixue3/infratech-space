<?php

namespace App\Services;

use App\Repositories\Contracts\HistoryRepositoryInterface;
use Illuminate\Support\Collection;

class HistoryService
{
    public function __construct(
        protected HistoryRepositoryInterface $historyRepository
    ) {}

    /**
     * Get historical company timeline records.
     */
    public function getCompanyTimeline(): Collection
    {
        return $this->historyRepository->getAllOrdered();
    }
}
