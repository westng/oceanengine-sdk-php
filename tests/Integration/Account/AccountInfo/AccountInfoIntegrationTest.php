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

namespace Tests\Integration\Account\AccountInfo;

use OceanEngineSDK\OceanEngineClient;
use PHPUnit\Framework\TestCase;
use Tests\Integration\Concerns\LoadsEnvConfig;

/**
 * @internal
 * @coversNothing
 */
final class AccountInfoIntegrationTest extends TestCase
{
    use LoadsEnvConfig;

    /**
     * @dataProvider accountInfoRequestProvider
     *
     * @param callable(OceanEngineClient,int):object $requestBuilder
     */
    public function testAccountInfoInterfacesSmoke(string $label, callable $requestBuilder): void
    {
        [$token, $advertiserId] = $this->resolveTokenAndAdvertiserId();

        if ($token === '' || $advertiserId === '') {
            self::markTestSkipped('Set TOKEN and ADVERTISER_ID (or ADVERTISER_IDS) in .env.');
        }

        $payload = $this->runModuleSmokeRequest($token, (int) $advertiserId, $label, $requestBuilder);
        self::assertArrayHasKey('code', $payload);
    }

    /**
     * @return array<string, array{0:string,1:callable(OceanEngineClient,int):object}>
     */
    public function accountInfoRequestProvider(): array
    {
        return [
            'advertiser_info' => [
                '获取千川广告账户全量信息',
                static fn (OceanEngineClient $client, int $advertiserId) => $client->Account()
                    ->AccountInfo
                    ->AdvertiserInfo()
                    ->setParams([
                        'account_ids' => [$advertiserId],
                    ]),
            ],
            'advertiser_public_info' => [
                '获取千川广告账户基础信息',
                static fn (OceanEngineClient $client, int $advertiserId) => $client->Account()
                    ->AccountInfo
                    ->AdvertiserPublicInfo()
                    ->setParams([
                        'account_ids' => [$advertiserId],
                    ]),
            ],
            'user_info' => [
                '获取授权时登录用户信息',
                static fn (OceanEngineClient $client, int $advertiserId) => $client->Account()
                    ->AccountInfo
                    ->UserInfo()
                    ->setParams([
                        'advertiser_id' => $advertiserId,
                    ]),
            ],
        ];
    }
}
