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

    private array $data = [];

    /**
     * Receives data
     * -------------
     * Получает данные
     *
     * @param  string $key
     * @return mixed
     */
    public function get(string $key): mixed
    {
        if (!array_key_exists($key, $this->data)) {
            throw new \InvalidArgumentException('Invalid key given');
        }
        
        return $this->data[$key];
    }

    /**
     * Adds data
     * ---------
     * Добавляет данные
     *
     * @param  string $key
     * @param  mixed  $data
     * @return void
     */
    public function set(string $key, mixed $data): void
    {
        if (!in_array($key, self::ALLOWED_KEYS)) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        $this->data[$key] = $data;
    }
}
