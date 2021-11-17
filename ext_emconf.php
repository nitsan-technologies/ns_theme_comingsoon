<?php
/*
 * This file is part of the package nitsan/ns-basetheme.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

// Provide detailed information and depenencies of EXT:ns_theme_comingsoon
$EM_CONF['ns_theme_comingsoon'] = array(
	'title' => '[NITSAN] Coming Soon TYPO3 Template',
	'description' => 'Maintenance mode TYPO3 template is carefully designed with attention to the details. Your visitors will love it. LIVE Demo: https://demo.t3terminal.com/?theme=t3t-coming-soon You can download PRO version with more-features & free-support at https://t3terminal.com/t3-coming-soon-maintenance-mode-typo3-template/',
	'category' => 'templates',
	'author' => 'NITSAN Technologies Pvt Ltd',
	'author_email' => 'info@nitsan.in',
	'author_company' => 'NITSAN Technologies Pvt Ltd',
	'state' => 'stable',
	'version' => '11.0.2',
	'constraints' => array(
		'depends' => array(
            		'typo3' => '9.0.0-10.9.99',
			'ns_basetheme' => '9.0.0-11.9.99',
			'gridelements' => '9.0.0-10.9.99',
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
