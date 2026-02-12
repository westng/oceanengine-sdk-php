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

namespace Tests\Unit;

use Api\Account\AccountRel\QianChuanUniPromotionAuthInit;
use Core\Profile\ChainProxy;
use OceanEngineSDK\OceanEngineClient;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class OceanEngineClientTest extends TestCase
{
    /**
     * @dataProvider topLevelModuleProvider
     */
    public function testTopLevelModulesAreDiscovered(string $moduleName): void
    {
        $client = new OceanEngineClient('token');

        $proxy = $client->module($moduleName);

        self::assertInstanceOf(ChainProxy::class, $proxy);
    }

    /**
     * @return array<string, array{0: string}>
     */
    public function topLevelModuleProvider(): array
    {
        return [
            'Account' => ['Account'],
            'DataReports' => ['DataReports'],
            'EnterpriseAccount' => ['EnterpriseAccount'],
            'JuLiangAds' => ['JuLiangAds'],
            'JuLiangLocalPush' => ['JuLiangLocalPush'],
            'JuLiangQianChuan' => ['JuLiangQianChuan'],
            'JuLiangStarMap' => ['JuLiangStarMap'],
            'Materials' => ['Materials'],
            'Tools' => ['Tools'],
        ];
    }

    public function testUnknownModuleThrowsInvalidArgumentException(): void
    {
        $client = new OceanEngineClient('token');

        $this->expectException(\InvalidArgumentException::class);
        $client->module('NotExists');
    }

    public function testUnknownMagicCallThrowsBadMethodCallException(): void
    {
        $client = new OceanEngineClient('token');

        $this->expectException(\BadMethodCallException::class);
        $method = 'NotExists';
        $client->{$method}();
    }

    public function testMagicTopLevelCallReturnsChainProxy(): void
    {
        $client = new OceanEngineClient('token');

        $proxy = $client->JuLiangAds();

        self::assertInstanceOf(ChainProxy::class, $proxy);
    }

    public function testLegacyAliasClassCanStillBeInstantiated(): void
    {
        $legacyClass = 'Account\AccountRel\QianChuanUniPromotionAuthInit';
        self::assertTrue(class_exists($legacyClass));

        $legacy = new $legacyClass();

        self::assertInstanceOf(QianChuanUniPromotionAuthInit::class, $legacy);
    }
}
