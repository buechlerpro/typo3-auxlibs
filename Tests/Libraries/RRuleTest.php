<?php

/*
 * This file is part of the package buepro/auxlibs.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Buepro\Auxlibs\Tests\Libraries;

include_once 'LibraryTest.php';

class RRuleTest extends LibraryTest
{
    /**
     * @test
     */
    public function classIsAbsent(): void
    {
        $this->assertFalse(class_exists('\RRule\RRule'));
    }

    /**
     * @test
     */
    public function classIsPresent(): void
    {
        @include 'phar://' . __DIR__ . '/../../Libraries/rlanvin-php-rrule.phar/vendor/autoload.php';
        $this->assertTrue(class_exists('\RRule\RRule'));
    }
}

(new RRuleTest())->runTests();
