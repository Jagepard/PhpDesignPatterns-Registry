<?php
/**
 * Date: 09.04.18
 * Time: 16:11
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Registry;


/**
 * Class Registry
 * @package Structural\Registry
 */
class Registry
{

    const ALLOWED_KEYS = [
        'stdClass'
    ];

    /**
     * @var array
     */
    protected static $data = [];

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