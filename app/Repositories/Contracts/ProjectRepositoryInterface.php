<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;

interface ProjectRepositoryInterface
{
    /**
     * Get all projects ordered.
     *
     * @return Collection
     */
    public function getAllOrdered(): Collection;

    /**
     * Get featured projects.
     *
     * @param int $limit
     * @return Collection
     */
    public function getFeatured(int $limit = 3): Collection;

    /**
     * Get projects by category.
     *
     * @param string $category
     * @return Collection
     */
    public function getByCategory(string $category): Collection;
}
