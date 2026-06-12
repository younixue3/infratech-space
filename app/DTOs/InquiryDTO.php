<?php

namespace App\DTOs;

use App\Http\Requests\StoreInquiryRequest;

readonly class InquiryDTO
{
    public function __construct(
        public string $name,
        public string $email,
        public ?string $phone,
        public ?string $company,
        public string $subject,
        public string $message
    ) {}

    /**
     * Create DTO from validated Form Request.
     */
    public static function fromRequest(StoreInquiryRequest $request): self
    {
        return new self(
            name: $request->validated('name'),
            email: $request->validated('email'),
            phone: $request->validated('phone'),
            company: $request->validated('company'),
            subject: $request->validated('subject'),
            message: $request->validated('message')
        );
    }

    /**
     * Convert DTO properties to array.
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'company' => $this->company,
            'subject' => $this->subject,
            'message' => $this->message,
        ];
    }
}
