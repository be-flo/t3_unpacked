<?php
defined('TYPO3_MODE') || die();

call_user_func(function(string $extKey) {

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['fileList']['editIconsHook'][] = \BeFlo\T3Unpacked\Hook\FileListHook::class;

}, 't3_unpacked');