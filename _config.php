<?php
/**
 * @package silverstripe-groupedcmsmenu
 */

if(!defined('GROUPEDCMSMENU_PATH')) {
	define('GROUPEDCMSMENU_PATH', rtrim(basename(dirname(__FILE__))));
}

// To group CMS menu items:
// GroupedCmsMenu::group('Content', array('CMSMain', 'AssetAdmin'));

Object::add_extension('LeftAndMain', 'GroupedCmsMenu');