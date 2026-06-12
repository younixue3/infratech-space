<?php

namespace App\Repositories\Eloquent;

use App\Models\Project;
use App\Repositories\Contracts\ProjectRepositoryInterface;
use Illuminate\Support\Collection;

class EloquentProjectRepository implements ProjectRepositoryInterface
{
    /**
     * Get all projects ordered.
     */
    public function getAllOrdered(): Collection
    {
        return Project::orderBy('order')->orderBy('year', 'desc')->get();
    }

    /**
     * Get featured projects.
     */
    public function getFeatured(int $limit = 3): Collection
    {
        return Project::where('featured', true)
            ->orderBy('order')
            ->take($limit)
            ->get();
    }

    /**
     * Get projects by category.
     */
    public function getByCategory(string $category): Collection
    {
        return Project::where('category', $category)
            ->orderBy('order')
            ->orderBy('year', 'desc')
            ->get();
    }
}
