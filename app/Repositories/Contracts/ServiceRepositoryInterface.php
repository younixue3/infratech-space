<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;

interface ServiceRepositoryInterface
{
    /**
     * Get all services ordered.
     *
     * @return Collection
     */
    public function getAllOrdered(): Collection;

    /**
     * Find a service by its slug.
     *
     * @param string $slug
     * @return mixed
     */
    public function findBySlug(string $slug): mixed;
}
