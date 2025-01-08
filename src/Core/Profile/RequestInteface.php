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

interface RequestInteface
{
    public function getUrl();

    public function setUrl($url);

    public function getMethod();

    public function getTimeout();

    public function setParams($array);

    public function getParams();

    public function addParam($key, $value);

    public function getContentType();

    public function check();
}
