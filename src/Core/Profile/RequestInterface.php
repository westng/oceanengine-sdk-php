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

namespace Core\Profile;

interface RequestInterface
{
    public function getUrl(): string;

    public function setUrl(string $url): static;

    public function getMethod(): string;

    public function getTimeout(): int;

    public function setParams(array $array): static;

    public function getParams(): array;

    public function addParam(string $key, mixed $value): static;

    public function getContentType(): string;

    public function check(): void;
}
