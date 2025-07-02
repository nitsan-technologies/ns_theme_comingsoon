<?php

// Provide detailed information and depenencies of EXT:ns_theme_comingsoon
$EM_CONF['ns_theme_comingsoon'] = array(
	'title' => 'T3 Coming Soon – TYPO3 Maintenance Template',
	'description' => 'A minimal and effective TYPO3 template for maintenance or coming soon pages. Inform your visitors while your TYPO3 site is under construction or updates.',
	'category' => 'templates',
	'author' => 'Team T3Planet',
	'author_email' => 'info@t3planet.de',
	'author_company' => 'T3Planet',
	'state' => 'stable',
	'version' => '11.1.3',
	'constraints' => array(
		'depends' => array(
			'typo3' => '10.0.0-11.5.99',
			'ns_basetheme' => '10.0.0-11.5.99',
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
