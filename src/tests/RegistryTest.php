<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Structural\Registry\Registry;


/**
 * Class SingletonsPoolTest
 */
class RegistryTest extends PHPUnit_Framework_TestCase
{

    protected function setUp(): void
    {

    }

    public function testRegistry()
    {
        Registry::setData('stdClass', new stdClass());
        $this->assertInstanceOf(stdClass::class, Registry::getData('stdClass'));
    }

    public function testSetDataException()
    {
        $this->expectException(InvalidArgumentException::class);
        Registry::setData('StdClass', new stdClass());
    } // @codeCoverageIgnore

    public function testGetDataException()
    {
        $this->expectException(InvalidArgumentException::class);
        Registry::getData('StdClass');
    } // @codeCoverageIgnore
}
