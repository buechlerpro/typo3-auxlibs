<?php

/*
 * This file is part of the package buepro/auxlibs.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Buepro\Auxlibs\Tests\Libraries;

include_once 'LibraryTest.php';

class HashidsTest extends LibraryTest
{
    /**
     * @test
     */
    public function classIsAbsent(): void
    {
        $this->assertFalse(class_exists('\Hashids\Hashids'));
    }

    /**
     * @test
     */
    public function classIsPresent(): void
    {
        @include 'phar://' . __DIR__ . '/../../Libraries/hashids-hashids.phar/vendor/autoload.php';
        $this->assertTrue(class_exists('\Hashids\Hashids'));
    }
}

(new HashidsTest())->runTests();
