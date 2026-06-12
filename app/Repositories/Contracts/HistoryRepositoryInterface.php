<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;

interface HistoryRepositoryInterface
{
    /**
     * Get all history milestones ordered.
     *
     * @return Collection
     */
    public function getAllOrdered(): Collection;
}
