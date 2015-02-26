<?php
/**
 * Default site title. Set unique page titles in each respective page.
 */
$site_title = 'The Secret Lives of Objects @ Chicago History Museum';
$page_url = $_SERVER["PHP_SELF"];

/**
 * Register your pages here. Navigation will be automatically generated.
 */
$registered_pages = array(
	'Home'		=>	'',
	'Interior'	=>	'interior'
);

/**
 * You probably don't need to edit below this point. But you can. ;)
 */

$body_class = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME );

/**
 * Cachebust
 */

function cachebust($f) { echo $f . '?=' . date("mdyHis", filemtime($f)); }

/**
 * This function builds the main navigation. Extend to sidebars and footers
 * as needed.
 *
 * @param	string	$body_class	The body class, used to check which page we're on.
 * @param	array	$registered_pages	Pages you want to appear in the nav.
 * @return	string	HTML for the navigation.
 */