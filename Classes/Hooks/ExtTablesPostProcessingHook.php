<?php

/*
 * This file is part of the package buepro/auxlibs.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Buepro\Auxlibs\Hooks;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Hook handler used after all ext_tables.php have been executed.
 * In contrast to ext_tables.php processing this call isn't cached.
 *
 * @see \TYPO3\CMS\Core\Core\Bootstrap
 */
class ExtTablesPostProcessingHook implements \TYPO3\CMS\Core\Database\TableConfigurationPostProcessingHookInterface
{
    /**
     * Loads 3rd-party libraries.
     * In case a class from the package already exists it is assumed that it has been loaded through composer-mode.
     */
    public function processData()
    {
        // Loads package Hashids\Hashids
        if (!class_exists('Hashids\Hashids')) {
            @include 'phar://'
                . ExtensionManagementUtility::extPath('auxlibs')
                . 'Libraries/hashids-hashids.phar/vendor/autoload.php';
        }
    }
}
