<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Registry\Tests;

use Structural\Registry\Registry;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class RegistryTest extends PHPUnit_Framework_TestCase
{

    public function testRegistry()
    {
        Registry::setData('stdClass', new \stdClass());
        $this->assertInstanceOf(\stdClass::class, Registry::getData('stdClass'));
    }

    public function testSetDataException()
    {
        $this->expectException(\InvalidArgumentException::class);
        Registry::setData('StdClass', new \stdClass());
    } // @codeCoverageIgnore

    public function testGetDataException()
    {
        $this->expectException(\InvalidArgumentException::class);
        Registry::getData('StdClass');
    } // @codeCoverageIgnore
}
