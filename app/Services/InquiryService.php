<?php

namespace App\Services;

use App\DTOs\InquiryDTO;
use App\Repositories\Contracts\InquiryRepositoryInterface;
use Illuminate\Support\Facades\Log;

class InquiryService
{
    public function __construct(
        protected InquiryRepositoryInterface $inquiryRepository
    ) {}

    /**
     * Handle incoming contact inquiry submission.
     */
    public function submitInquiry(InquiryDTO $dto): mixed
    {
        // 1. Save in the database
        $inquiry = $this->inquiryRepository->create($dto);

        // 2. Log receipt (or fire event, queue mail)
        Log::info("New Inquiry Saved: ID #{$inquiry->id} | Email: {$dto->email} | Subject: {$dto->subject}");

        return $inquiry;
    }
}
