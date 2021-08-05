<?php
// TYPO3 Security Check
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Let's configuration of this extension from "Extension Manager"
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY] = unserialize($_EXTCONF);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:ns_theme_comingsoon/Configuration/PageTSconfig/setup.typoscript">');

// Let's include PageTSconfig
if (TYPO3_MODE === 'BE') {
    // Let's add default PageTS for "Form"
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:ns_theme_comingsoon/Configuration/RTE/Default.yaml';
    
}
