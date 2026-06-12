<?php

namespace App\Repositories\Contracts;

use App\DTOs\InquiryDTO;

interface InquiryRepositoryInterface
{
    /**
     * Create a new contact inquiry from DTO.
     *
     * @param InquiryDTO $dto
     * @return mixed
     */
    public function create(InquiryDTO $dto): mixed;
}
