<?php

namespace App\Services;

use App\Repositories\Contracts\ServiceRepositoryInterface;
use Illuminate\Support\Collection;

class ServiceService
{
    public function __construct(
        protected ServiceRepositoryInterface $serviceRepository
    ) {}

    /**
     * Get all active services.
     */
    public function getActiveServices(): Collection
    {
        return $this->serviceRepository->getAllOrdered();
    }

    /**
     * Find a service by slug.
     */
    public function getServiceBySlug(string $slug): mixed
    {
        return $this->serviceRepository->findBySlug($slug);
    }
}
