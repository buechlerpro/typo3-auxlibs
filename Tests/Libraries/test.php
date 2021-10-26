<?php

/*
 * This file is part of the package buepro/auxlibs.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

include_once 'HashidsTest.php';
include_once 'ParsedownTest.php';
include_once 'RRuleTest.php';
echo sprintf("\n\n%d library tests successfully terminated\n", \Buepro\Auxlibs\Tests\Libraries\LibraryTest::$testCount);
exit(0);
