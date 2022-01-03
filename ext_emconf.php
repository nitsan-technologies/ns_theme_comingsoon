<?php
/*
 * This file is part of the package nitsan/ns-basetheme.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

// Provide detailed information and depenencies of EXT:ns_theme_comingsoon
$EM_CONF['ns_theme_comingsoon'] = array(
	'title' => '[NITSAN] T3 Coming Soon | Maintenance Mode TYPO3 Template',
	'description' => 'T3 Coming Soon: Maintenance Mode TYPO3 Template is carefully designed with attention to the details. This TYPO3 maintenance template is designed to catch attention and inform visitors what you and your TYPO3 website are up to.',
	'category' => 'templates',
	'author' => 'NITSAN Technologies Pvt Ltd',
	'author_email' => 'info@nitsan.in',
	'author_company' => 'NITSAN Technologies Pvt Ltd',
	'state' => 'stable',
	'version' => '12.0.0',
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
