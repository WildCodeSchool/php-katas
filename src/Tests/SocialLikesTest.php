<?php

namespace Wcs\Katas\Tests;

use PHPUnit\Framework\TestCase;
use Wcs\Katas\Exercises\SocialLikes;

class SocialLikesTest extends TestCase
{
    public function testGetLikes()
    {
        $socialLikes = new SocialLikes();
        self::assertEquals("Be the first to like this", $socialLikes->getLikes([]));
        self::assertEquals("Cartman likes this", $socialLikes->getLikes(["Cartman"]));
        self::assertEquals("Bart likes this", $socialLikes->getLikes(["Bart"]));
        self::assertEquals("Kenny and Cartman like this", $socialLikes->getLikes(["Kenny", "Cartman"]));
        self::assertEquals("Bart and Lisa like this", $socialLikes->getLikes(["Bart", "Lisa"]));
        self::assertEquals("Stan and 3 other people like this", $socialLikes->getLikes(["Stan", "Kyle", "Kenny", "Cartman"]));
        self::assertEquals("Homer and 4 other people like this", $socialLikes->getLikes(["Homer", "Marge", "Bart", "Lisa", "Maggie"]));
    }
}
