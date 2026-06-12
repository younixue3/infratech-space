<?php

namespace App\Repositories\Eloquent;

use App\Models\History;
use App\Repositories\Contracts\HistoryRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentHistoryRepository implements HistoryRepositoryInterface
{
    /**
     * Get all history milestones ordered.
     */
    public function getAllOrdered(): Collection
    {
        return History::orderBy('order')->orderBy('year', 'asc')->get();
    }
}
