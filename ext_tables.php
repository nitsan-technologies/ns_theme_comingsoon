<?php
// TYPO3 Security Check
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Add default include static TypoScript (for root page)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ns_theme_comingsoon', 'Configuration/TypoScript', '[NITSAN] Child Theme & Templates');