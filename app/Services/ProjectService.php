<?php

namespace App\Services;

use App\Repositories\Contracts\ProjectRepositoryInterface;
use Illuminate\Support\Collection;

class ProjectService
{
    public function __construct(
        protected ProjectRepositoryInterface $projectRepository
    ) {}

    /**
     * Get all portfolio projects.
     */
    public function getAllProjects(): Collection
    {
        return $this->projectRepository->getAllOrdered();
    }

    /**
     * Get featured projects for landing page.
     */
    public function getFeaturedProjects(int $limit = 3): Collection
    {
        return $this->projectRepository->getFeatured($limit);
    }

    /**
     * Get projects filtered by category.
     */
    public function getProjectsByCategory(string $category): Collection
    {
        return $this->projectRepository->getByCategory($category);
    }
}
