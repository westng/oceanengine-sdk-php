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

namespace Tests\Integration\Oauth;

use OceanEngineSDK\OceanEngineAuth;
use PHPUnit\Framework\TestCase;
use Tests\Integration\Concerns\LoadsEnvConfig;

/**
 * @internal
 * @coversNothing
 */
final class OauthIntegrationTest extends TestCase
{
    use LoadsEnvConfig;

    public function testGetAccessTokenResponse(): void
    {
        [$appId, $secret, $authCode] = $this->resolveGetAccessTokenEnv();

        if ($appId === '' || $secret === '' || $authCode === '') {
            self::markTestSkipped('Set APPID, SECRET and AUTH_CODE in .env.');
        }

        $payload = $this->runWithNetworkGuard(function () use ($appId, $secret, $authCode): array {
            $auth = new OceanEngineAuth($appId, $secret);
            return $auth->getAccessToken($authCode);
        });

        fwrite(STDOUT, "\n[Integration] OAuth getAccessToken response:\n" . json_encode($payload, JSON_UNESCAPED_UNICODE) . "\n");

        self::assertIsArray($payload);
        self::assertArrayHasKey('code', $payload);
    }

    public function testRefreshTokenResponse(): void
    {
        [$appId, $secret, $refreshToken] = $this->resolveRefreshTokenEnv();

        if ($appId === '' || $secret === '' || $refreshToken === '') {
            self::markTestSkipped('Set APPID, SECRET and REFRESH_TOKEN in .env.');
        }

        $payload = $this->runWithNetworkGuard(function () use ($appId, $secret, $refreshToken): array {
            $auth = new OceanEngineAuth($appId, $secret);
            return $auth->refreshToken($refreshToken);
        });

        fwrite(STDOUT, "\n[Integration] OAuth refreshToken response:\n" . json_encode($payload, JSON_UNESCAPED_UNICODE) . "\n");

        self::assertIsArray($payload);
        self::assertArrayHasKey('code', $payload);
    }

    /**
     * @return array{0:string,1:string,2:string}
     */
    private function resolveGetAccessTokenEnv(): array
    {
        [$appId, $secret, $authCode] = $this->resolveOauthCredentials();
        return [$appId, $secret, $authCode];
    }

    /**
     * @return array{0:string,1:string,2:string}
     */
    private function resolveRefreshTokenEnv(): array
    {
        [$appId, $secret, , $refreshToken] = $this->resolveOauthCredentials();
        return [$appId, $secret, $refreshToken];
    }
}
