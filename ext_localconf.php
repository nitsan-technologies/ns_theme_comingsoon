<?php
$_EXTKEY = "ns_theme_comingsoon";

// Let's configuration of this extension from "Extension Manager"
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF'][$_EXTKEY] = unserialize($_EXTCONF);

// Let's include PageTSconfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("@import 'EXT:ns_theme_comingsoon/Configuration/PageTSconfig/setup.typoscript'");

// Let's include PageTSconfig
if (TYPO3_MODE === 'BE') {
	// Let's add default PageTS for "Form"
	$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:ns_theme_comingsoon/Configuration/RTE/Default.yaml';

}
