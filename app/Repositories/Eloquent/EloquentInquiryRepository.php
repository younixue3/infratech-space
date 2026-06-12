<?php

namespace App\Repositories\Eloquent;

use App\DTOs\InquiryDTO;
use App\Models\Inquiry;
use App\Repositories\Contracts\InquiryRepositoryInterface;

class EloquentInquiryRepository implements InquiryRepositoryInterface
{
    /**
     * Create a new contact inquiry from DTO.
     */
    public function create(InquiryDTO $dto): mixed
    {
        return Inquiry::create($dto->toArray());
    }
}
