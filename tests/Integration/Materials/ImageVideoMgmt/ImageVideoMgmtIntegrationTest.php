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

namespace Tests\Integration\Materials\ImageVideoMgmt;

use OceanEngineSDK\OceanEngineClient;
use PHPUnit\Framework\TestCase;
use Tests\Integration\Concerns\LoadsEnvConfig;

/**
 * @internal
 * @coversNothing
 */
final class ImageVideoMgmtIntegrationTest extends TestCase
{
    use LoadsEnvConfig;

    /**
     * @dataProvider imageVideoRequestProvider
     *
     * @param callable(OceanEngineClient,int):object $requestBuilder
     */
    public function testImageVideoInterfacesSmoke(string $label, callable $requestBuilder): void
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
    public function imageVideoRequestProvider(): array
    {
        return [
            'file_image_get' => [
                '获取图片素材',
                static fn (OceanEngineClient $client, int $advertiserId) => $client->Materials()
                    ->ImageVideoMgmt
                    ->FileImageGet()
                    ->setParams([
                        'advertiser_id' => $advertiserId,
                    ]),
            ],
            'file_image_ad_get' => [
                '获取同主体下广告主图片素材',
                static fn (OceanEngineClient $client, int $advertiserId) => $client->Materials()
                    ->ImageVideoMgmt
                    ->FileImageAdGet()
                    ->setParams([
                        'advertiser_id' => $advertiserId,
                    ]),
            ],
            'file_video_ad_get' => [
                '获取同主体下广告主视频素材',
                static fn (OceanEngineClient $client, int $advertiserId) => $client->Materials()
                    ->ImageVideoMgmt
                    ->FileVideoAdGet()
                    ->setParams([
                        'advertiser_id' => $advertiserId,
                    ]),
            ],
        ];
    }
}
