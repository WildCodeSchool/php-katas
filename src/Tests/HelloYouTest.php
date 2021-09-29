<?php

namespace Wcs\Katas\Tests;

use Wcs\Katas\Exercises\HelloYou;
use PHPUnit\Framework\TestCase;

class HelloYouTest extends TestCase
{

    public function testSayHello()
    {
        $helloYou = new HelloYou();
        self::assertEquals("Hello You", $helloYou->sayHello("You"));
        self::assertEquals("Hello Brandon", $helloYou->sayHello("Brandon"));
        self::assertEquals("Hello World", $helloYou->sayHello(""));
        self::assertEquals("Hello World", $helloYou->sayHello(null));
    }
}
