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

namespace Core\Exception;

class OceanEngineException extends \Exception
{
    private int $errorCode;

    private string $errorMessage;

    private string $errorType;

    /**
     * ClientException constructor.
     * @param mixed $errorMessage
     * @param mixed $errorCode
     */
    public function __construct(string $errorMessage, int $errorCode = 500) // 默认值为整数 500
    {
        parent::__construct($errorMessage);
        $this->errorMessage = $errorMessage;
        $this->errorCode = $errorCode;
        $this->setErrorType('OceanEngine');
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function setErrorCode(int $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    public function getErrorType(): string
    {
        return $this->errorType;
    }

    public function setErrorType(string $errorType): void
    {
        $this->errorType = $errorType;
    }
}
