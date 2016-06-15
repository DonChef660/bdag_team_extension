<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'BDAG.' . $_EXTKEY,
	'Bdagteamlist',
	array(
		'Employee' => 'list, show',
		'Category' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Employee' => '',
		'Category' => '',
		
	)
);
