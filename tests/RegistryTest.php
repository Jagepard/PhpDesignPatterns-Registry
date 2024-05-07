<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Registry\Tests;

use Structural\Registry\Registry;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class RegistryTest extends PHPUnit_Framework_TestCase
{
    private Registry $registry;

    public function setUp(): void
    {
        $this->registry = new Registry();
    }

    public function testRegistry(): void
    {
        $this->registry->set("stdClass", new \stdClass());
        $this->assertInstanceOf(\stdClass::class, $this->registry->get("stdClass"));
    }

    public function testSetDataException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->registry->set("StdClass", new \stdClass());
    } // @codeCoverageIgnore

    public function testGetDataException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->registry->get("StdClass");
    } // @codeCoverageIgnore
}
