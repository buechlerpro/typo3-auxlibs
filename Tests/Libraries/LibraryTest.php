<?php

/*
 * This file is part of the package buepro/auxlibs.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Buepro\Auxlibs\Tests\Libraries;

use ReflectionClass;

/**
 * Library test class
 *
 * Usage:
 *   1. Extend this class
 *   2. Call `runTests`: `(new MyLibraryClass())->runTests()`
 */
class LibraryTest
{
    /**
     * @var int
     */
    public static $testCount = 0;

    public function runTests(): void
    {
        $reflection = new ReflectionClass(get_class($this));
        foreach ($reflection->getMethods() as $methodReflection) {
            $docComment = $methodReflection->getDocComment();
            if ($docComment !== false && strpos($docComment, '@test') !== false) {
                $methodName = $methodReflection->getName();
                self::$testCount++;
                $this->{$methodName}();
            }
        }
    }

    protected function assertTestFailure(): void
    {
        echo "\n";
        debug_print_backtrace(0, 3);
        exit(1);
    }

    protected function assertTrue(bool $expected): void
    {
        if ($expected === true) {
            echo '.';
            return;
        }
        $this->assertTestFailure();
    }

    protected function assertFalse(bool $expected): void
    {
        if ($expected === false) {
            echo '.';
            return;
        }
        $this->assertTestFailure();
    }
}
