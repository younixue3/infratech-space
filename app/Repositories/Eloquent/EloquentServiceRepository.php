<?php

namespace App\Repositories\Eloquent;

use App\Models\Service;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentServiceRepository implements ServiceRepositoryInterface
{
    /**
     * Get all services ordered.
     */
    public function getAllOrdered(): Collection
    {
        return Service::orderBy('order')->get();
    }

    /**
     * Find a service by its slug.
     */
    public function findBySlug(string $slug): mixed
    {
        return Service::where('slug', $slug)->firstOrFail();
    }
}
