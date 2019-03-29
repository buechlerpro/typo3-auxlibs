<?php

/*
 * This file is part of the package buepro/auxlibs.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') or die('Access denied.');

// Adds hook handler
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['extTablesInclusion-PostProcessing']['buepro/auxlibs'] =
    \Buepro\Auxlibs\Hooks\ExtTablesPostProcessingHook::class;
