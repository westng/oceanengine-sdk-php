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

namespace Core\Helper;

use Core\Exception\InvalidParamException;

class RequestCheckUtil
{
    /**
     * 判断参数是否为空.
     *
     * @throws InvalidParamException
     */
    public static function checkNotNull(mixed $value, string $fieldName): void
    {
        if (self::checkEmpty($value)) {
            throw new InvalidParamException('client-check-error:Missing Required Arguments: ' . $fieldName, 40);
        }
    }

    /**
     * 限制字符串参数的长度.
     *
     * @throws InvalidParamException
     */
    public static function checkMaxLength(string $value, int $maxLength, string $fieldName): void
    {
        if (! self::checkEmpty($value) && mb_strlen($value, 'UTF-8') > $maxLength) {
            throw new InvalidParamException('client-check-error:Invalid Arguments: the length of ' . $fieldName . ' can not be larger than ' . $maxLength . '.', 41);
        }
    }

    /**
     * 限制数组或逗号分隔字符串的最大长度.
     *
     * @throws InvalidParamException
     */
    public static function checkMaxListSize(array|string $value, int $maxSize, string $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        $list = is_array($value) ? $value : preg_split('/,/', $value);
        if (count($list) > $maxSize) {
            throw new InvalidParamException('client-check-error:Invalid Arguments: the listsize of ' . $fieldName . ' must be less than ' . $maxSize . '.', 41);
        }
    }

    /**
     * 检查值是否在允许字段内.
     *
     * @throws InvalidParamException
     */
    public static function checkAllowField(array|string $value, array $allowed, string $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        if (is_array($value)) {
            $diff = array_diff($value, $allowed);
            if (! empty($diff)) {
                throw new InvalidParamException('client-check-error: AllowField of ' . $fieldName . ' contains invalid value(s).', 41);
            }
        } elseif (! in_array($value, $allowed, true)) {
            throw new InvalidParamException('client-check-error: AllowField of ' . $fieldName . ' is not allowed.', 41);
        }
    }

    /**
     * 检查最大值.
     *
     * @throws InvalidParamException
     */
    public static function checkMaxValue(float|int $value, float|int $maxValue, string $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        self::checkNumeric($value, $fieldName);

        if ($value > $maxValue) {
            throw new InvalidParamException('client-check-error:Invalid Arguments: the value of ' . $fieldName . ' can not be larger than ' . $maxValue . '.', 41);
        }
    }

    /**
     * 检查最小值.
     *
     * @throws InvalidParamException
     */
    public static function checkMinValue(float|int $value, float|int $minValue, string $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        self::checkNumeric($value, $fieldName);

        if ($value < $minValue) {
            throw new InvalidParamException('client-check-error:Invalid Arguments: the value of ' . $fieldName . ' can not be less than ' . $minValue . '.', 41);
        }
    }

    /**
     * 检查文件是否存在.
     *
     * @throws InvalidParamException
     */
    public static function checkFileExist(string $filePath, string $fieldName): void
    {
        if (! file_exists($filePath)) {
            throw new InvalidParamException('client-check-error:Invalid Arguments: the file of "' . $fieldName . '" does not exist: ' . realpath($filePath));
        }
    }

    /**
     * 判断是否为空.
     */
    public static function checkEmpty(mixed $value): bool
    {
        if (! isset($value)) {
            return true;
        }
        if ($value === null) {
            return true;
        }
        if (is_array($value) && count($value) === 0) {
            return true;
        }
        if (is_string($value) && trim($value) === '') {
            return true;
        }

        return false;
    }

    /**
     * 判断是否为数字.
     *
     * @throws InvalidParamException
     */
    public static function checkNumeric(mixed $value, string $fieldName): void
    {
        if (! is_numeric($value)) {
            throw new InvalidParamException('client-check-error:Invalid Arguments: the value of ' . $fieldName . ' is not a number: ' . $value . '.', 41);
        }
    }
}
