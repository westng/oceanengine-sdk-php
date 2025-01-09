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

namespace OceanEngineSDK;

use AdOauth\GetAccessToken;
use AdOauth\RefreshToken;
use Api\JuLiangAds\AccountMgmt\AccountRel\AdvertiserGet;
use Core\Exception\OceanEngineException;
use Core\Http\HttpRequest;
use Core\Http\HttpResponse;
use Core\Profile\RequestInteface;

class OceanEngineAuth
{
    public string $app_id;

    public string $secret;

    public string $server_url = 'https://ad.oceanengine.com/open_api';

    public string $box_url = 'https://api.oceanengine.com/open_api';

    public bool $is_sanbox = false;

    /**
     * AuthClient constructor.
     * @param mixed $app_id
     * @param mixed $secret
     * @param bool $is_sanbox
     * @param null $server_url
     * @param null $box_url
     */
    public function __construct(mixed $app_id, mixed $secret, bool $is_sanbox = false, $server_url = null, $box_url = null)
    {
        $this->app_id = $app_id;
        $this->secret = $secret;
        $this->is_sanbox = $is_sanbox;
        if ($server_url !== null) {
            $this->server_url = $server_url;
        }
        if ($box_url !== null) {
            $this->box_url = $box_url;
        }
    }

    /**
     * 获取access_token.
     * @param mixed $auth_code
     * @return string
     * @throws OceanEngineException
     */
    public function getAccessToken(mixed $auth_code): string
    {
        $request = new GetAccessToken();
        $request->setParams(['grant_type' => 'auth_code', 'app_id' => $this->app_id, 'secret' => $this->secret]);
        $request->addParam('auth_code', $auth_code);
        return $this->execute($request)->getBody();
    }

    /**
     * 刷新access_token.
     * @param mixed $refresh_token
     * @return string
     * @throws OceanEngineException
     */
    public function refreshToken(mixed $refresh_token): string
    {
        $request = new RefreshToken();
        $request->setParams(['grant_type' => 'refresh_token', 'app_id' => $this->app_id, 'secret' => $this->secret, 'refresh_token' => $refresh_token]);
        return $this->execute($request)->getBody();
    }

    /**
     * 获取Autocode Url.
     *
     * @param mixed $cb_url
     * @param mixed $scope
     * @param string $state
     * @return string
     */
    public function getAuthCodeUrl(mixed $cb_url, mixed $scope, string $state = 'your_custom_params'): string
    {
        $cb_url_encode = urlencode($cb_url);
        return "https://qianchuan.jinritemai.com/openapi/qc/audit/oauth.html?app_id={$this->app_id}&state={$state}&material_auth=1&redirect_uri={$cb_url_encode}";
    }

    public function makeClient($access_token): OceanEngineClient
    {
        return OceanEngineClient::getInstance($access_token, $this->is_sanbox, $this->server_url, $this->box_url);
    }

    public function advertiserGet($access_token): string
    {
        $request = new AdvertiserGet();
        $request->setParams(['access_token' => $access_token, 'app_id' => $this->app_id, 'secret' => $this->secret]);
        return $this->execute($request)->getBody();
    }

    /**
     * @param null $url
     * @throws OceanEngineException
     */
    private function execute(RequestInteface $request, $url = null): HttpResponse
    {
        $params = $request->getParams();
        $headers = [
            'Content-Type' => $request->getContentType(),
        ];
        if ($url == null) {
            $url = ($this->is_sanbox ? $this->box_url : $this->server_url) . $request->getUrl();
        }

        return HttpRequest::curl($url, $request->getMethod(), json_encode($params), $headers);
    }
}
