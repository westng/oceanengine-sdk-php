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

use Core\Exception\InvalidParamException;
use Core\Exception\OceanEngineException;
use Core\Http\HttpResponse;
use OceanEngineSDK\OceanEngineClient;

class RpcRequest implements RequestInterface
{
    protected ?OceanEngineClient $client = null;

    /**
     * request url.
     */
    protected string $url = '';

    /**
     * request method.
     */
    protected string $method = 'GET';

    /**
     * request timeout.
     */
    protected int $timeout = 60;

    /**
     * request query params or raw body.
     */
    protected array $params = [];

    /**
     * request header Content-Type.
     */
    protected string $content_type = 'application/json';

    /**
     * RpcRequest constructor.
     */
    public function __construct(?OceanEngineClient $client = null)
    {
        $this->client = $client;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function addParam(string $key, mixed $value): static
    {
        $this->params[$key] = $value;
        $this->{$key} = $value;
        return $this;
    }

    /**
     * @throws InvalidParamException
     */
    public function setParams(array $array): static
    {
        foreach ($array as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
            $this->params[$key] = $value;
        }
        return $this;
    }

    public function getContentType(): string
    {
        return $this->content_type;
    }

    /**
     * @throws InvalidParamException
     */
    public function check(): void
    {
        $reflection = new \ReflectionObject($this);
        foreach ($reflection->getProperties() as $property) {
            $type = $property->getType();
            if ($type !== null && ! $type->allowsNull()) {
                // PHP 8.1+ 检查 typed property 是否已初始化
                if (method_exists($property, 'isInitialized') && ! $property->isInitialized($this)) {
                    throw new InvalidParamException(sprintf(
                        '参数 %s 不能为空',
                        $property->getName()
                    ), 400);
                }
            }
        }
    }

    /**
     * @throws OceanEngineException
     */
    public function send(): HttpResponse
    {
        if (! $this->client instanceof OceanEngineClient) {
            throw new OceanEngineException('Request can not be send by null, OceanEngineClient instance should be set before send', 500);
        }

        $this->check();

        return $this->client->execute($this);
    }
}
