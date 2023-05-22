<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Registry;

final class Registry
{
    const ALLOWED_KEYS = [
        'stdClass'
    ];

    private static array $data = [];

    /**
     * Receives data
     * -------------
     * Получает данные
     *
     * @param  string    $key
     * @return \stdClass
     */
    public static function getData(string $key): \stdClass
    {
        if (!array_key_exists($key, self::$data)) {
            throw new \InvalidArgumentException('Invalid key given');
        }
        
        return self::$data[$key];
    }

    /**
     * Adds data
     * ---------
     * Добавляет данные
     *
     * @param  string    $key
     * @param  \stdClass $data
     * @return void
     */
    public static function setData(string $key, \stdClass $data)
    {
        if (!in_array($key, self::ALLOWED_KEYS)) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        self::$data[$key] = $data;
    }
}
