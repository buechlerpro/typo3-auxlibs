<?php


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
        if (!class_exists('Hashids\Hashids')) {
            @include 'phar://'
                . ExtensionManagementUtility::extPath('auxlibs')
                . 'Libraries/hashids-hashids.phar/vendor/autoload.php';
        }
        // Hands over to next middleware
        return $handler->handle($request);
    }
}
