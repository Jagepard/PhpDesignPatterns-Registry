<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Registry;

/**
 * Class Registry
 * @package Structural\Registry
 */
final class Registry
{
    const ALLOWED_KEYS = [
        'stdClass'
    ];

    /**
     * @var array
     */
    private static $data = [];

    /**
     * @param string $key
     * @return \stdClass
     */
    public static function getData(string $key): \stdClass
    {
        if (!array_key_exists($key, self::$data) || !isset(self::$data[$key])) {
            throw new \InvalidArgumentException('Invalid key given');
        }
        
        return self::$data[$key];
    }

    /**
     * @param $key
     * @param $data
     */
    public static function setData(string $key, \stdClass $data)
    {
        if (!in_array($key, self::ALLOWED_KEYS)) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        self::$data[$key] = $data;
    }
}
