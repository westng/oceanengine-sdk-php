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

use Core\Exception\OceanEngineException;
use Core\Http\HttpResponse;
use OceanEngineSDK\OceanEngineClient;

class RpcRequest implements RequestInteface
{
    protected OceanEngineClient $client;

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
     * @param null $client
     */
    public function __construct($client = null)
    {
        $this->client = $client;
    }

    public function setUrl($url): static
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

    public function addParam($key, $value): static
    {
        $this->params[$key] = $value;
        $this->{$key} = $value;
        return $this;
    }

    public function setParams($array): static
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

    public function check()
    {
        // TODO: Implement check() method.
    }

    /**
     * @throws OceanEngineException
     */
    public function send(): HttpResponse
    {
        if (! $this->client instanceof OceanEngineClient) {
            throw new OceanEngineException('Request can not be send by null, OceanEngineClent`s instance should be set before send', 500);
        }
        return $this->client->excute($this);
    }
}
