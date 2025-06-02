<?php

declare(strict_types=1);
/**
 * This file is part of Marketing PHP SDK.
 *
 * @link     https://github.com/westng/oceanengine-sdk-php
 * @document https://github.com/westng/oceanengine-sdk-php
 * @contact  westng
 * @license  https://github.com/westng/oceanengine-sdk-php/blob/main/LICENSE
 */

namespace Core\Http;

class HttpResponse
{
    private string $body;

    private int $status;

    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return 200 <= $this->status && 300 > $this->status;
    }

    public function getJsonBody(): array
    {
        $data = json_decode($this->body, true);
        if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
            throw new \RuntimeException('Failed to decode JSON body: ' . json_last_error_msg());
        }
        return $data;
    }
}

