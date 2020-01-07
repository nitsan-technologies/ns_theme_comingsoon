<?php

// Provide detailed information and depenencies of EXT:ns_theme_comingsoon
$EM_CONF[$_EXTKEY] = array(
	'title' => '[NITSAN] Coming Soon TYPO3 Template',
	'description' => 'Maintenance mode TYPO3 template is carefully designed with attention to the details. Your visitors will love it. LIVE Demo: https://demo.t3terminal.com/?theme=t3t-coming-soon You can download PRO version with more-features & free-support at https://t3terminal.com/t3-coming-soon-maintenance-mode-typo3-template/',
	'category' => 'templates',
	'author' => 'T3:Sonal Chauhan, QA:Vandna Kalivada',
	'author_email' => 'info@nitsan.in',
	'author_company' => 'NITSAN Technologies Pvt Ltd',
	'state' => 'stable',
	'version' => '1.1.1',
	'constraints' => array(
		'depends' => array(
            'typo3' => '8.0.0-10.9.99',
            'ns_basetheme' => '1.0.0-10.9.99',
			'gridelements' => '1.0.0-10.9.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	//'autoload' => array(
	//	'classmap' => array('Classes/'),
	//),
);
?>
