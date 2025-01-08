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
     * @param mixed $value
     * @param mixed $fieldName
     * @throws InvalidParamException
     */
    public static function checkNotNull($value, $fieldName): void
    {
        if (self::checkEmpty($value)) {
            throw new InvalidParamException('client-check-error:Missing Required Arguments: ' . $fieldName, 40);
        }
    }

    /**
     * 限制字符串参数的长度.
     *
     * @param mixed $value
     * @param mixed $maxLength
     * @param mixed $fieldName
     * @throws InvalidParamException
     */
    public static function checkMaxLength($value, $maxLength, $fieldName): void
    {
        if (! self::checkEmpty($value) && mb_strlen($value, 'UTF-8') > $maxLength) {
            throw new InvalidParamException('client-check-error:Invalid Arguments:the length of ' . $fieldName . ' can not be larger than ' . $maxLength . '.', 41);
        }
    }

    /**
     * 限制数组的最大长度.
     *
     * @param mixed $value
     * @param mixed $maxSize
     * @param mixed $fieldName
     * @throws InvalidParamException
     */
    public static function checkMaxListSize($value, $maxSize, $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        $list = preg_split('/,/', $value);
        if (count($list) > $maxSize) {
            throw new InvalidParamException('client-check-error:Invalid Arguments:the listsize(the string split by ",") of ' . $fieldName . ' must be less than ' . $maxSize . ' .', 41);
        }
    }

    /**
     * 限制允许字段.
     * @param mixed $value
     * @param mixed $array
     * @param mixed $fieldName
     * @throws InvalidParamException
     */
    public static function checkAllowField($value, $array, $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        if (is_array($value)) {
            $di_array = array_diff($value, $array);
            if (! empty($di_array)) {
                throw new InvalidParamException('client-check-error:AllowField of ' . $fieldName . '   .', 41);
            }
            return;
        }
        if (! in_array($value, $array)) {
            throw new InvalidParamException('client-check-error:AllowField of ' . $fieldName . '   .', 41);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $maxValue
     * @param mixed $fieldName
     * @throws InvalidParamException
     */
    public static function checkMaxValue($value, $maxValue, $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        self::checkNumeric($value, $fieldName);

        if ($value > $maxValue) {
            throw new InvalidParamException('client-check-error:Invalid Arguments:the value of ' . $fieldName . ' can not be larger than ' . $maxValue . ' .', 41);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $minValue
     * @param mixed $fieldName
     * @throws InvalidParamException
     */
    public static function checkMinValue($value, $minValue, $fieldName): void
    {
        if (self::checkEmpty($value)) {
            return;
        }

        self::checkNumeric($value, $fieldName);

        if ($value < $minValue) {
            throw new InvalidParamException('client-check-error:Invalid Arguments:the value of ' . $fieldName . ' can not be less than ' . $minValue . ' .', 41);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $fieldName
     * @throws InvalidParamException
     */
    public static function checkFileExist($value, $fieldName): void
    {
        if (! file_exists($value)) {
            throw new InvalidParamException('client-check-error:Invalid Arguments: the file of "' . $fieldName . '" is not exist: ' . realpath($value));
        }
    }

    public static function checkEmpty($value): bool
    {
        if (! isset($value)) {
            return true;
        }
        if ($value === null) {
            return true;
        }
        if (is_array($value) && count($value) == 0) {
            return true;
        }
        if (is_string($value) && trim($value) === '') {
            return true;
        }

        return false;
    }

    /**
     * @param mixed $value
     * @param mixed $fieldName
     * @throws InvalidParamException
     */
    protected static function checkNumeric($value, $fieldName): void
    {
        if (! is_numeric($value)) {
            throw new InvalidParamException('client-check-error:Invalid Arguments:the value of ' . $fieldName . ' is not number : ' . $value . ' .', 41);
        }
    }
}
