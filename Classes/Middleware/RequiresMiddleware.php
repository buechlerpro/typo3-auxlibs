<?php

/*
 * This file is part of the package buepro/auxlibs.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Buepro\Auxlibs\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class RequiresMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // Loads package Hashids\Hashids
        if (!class_exists('\Hashids\Hashids')) {
            @include 'phar://'
                . ExtensionManagementUtility::extPath('auxlibs')
                . 'Libraries/hashids-hashids.phar/vendor/autoload.php';
        }
        // Loads package Erusev\Parsedown
        if (!class_exists('\Parsedown')) {
            @include 'phar://'
                . ExtensionManagementUtility::extPath('auxlibs')
                . 'Libraries/erusev-parsedown.phar/vendor/autoload.php';
        }
        // Loads package Rlanvin\PhpRrule
        if (!class_exists('\RRule\RRule')) {
            @include 'phar://'
                . ExtensionManagementUtility::extPath('auxlibs')
                . 'Libraries/rlanvin-php-rrule.phar/vendor/autoload.php';
        }
        // Hands over to next middleware
        return $handler->handle($request);
    }
}
