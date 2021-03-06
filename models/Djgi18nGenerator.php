<?php
/*
 * Wolf CMS - Content Management Simplified. <http://www.wolfcms.org>
 * Copyright (C) 2008-2013 Martijn van der Kleijn <martijn.niji@gmail.com>
 *
 * This file is part of Wolf CMS. Wolf CMS is licensed under the GNU GPLv3 license.
 * Please see license.txt for the full license text.
 */

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

/**
 *
 * Note: to use the settings and documentation pages, you will first need to enable
 * the plugin!
 *
 * @package Plugins
 * @subpackage djg_i18n_generator
 *
 * @author Michał Uchnast <djgprv@gmail.com>,
 * @copyright kreacjawww.pl
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */
class Djgi18nGenerator {
	function Djgi18nGenerator()
	{
		// constructor;
	}
	public static function selfTest()
	{
		return true;	
	}
	public static function getPluginsList()
	{
		$directory = CORE_ROOT.DS.'plugins';
		if ($handle = opendir($directory)) while (false !== ($file = readdir($handle))) if ($file != "." && $file != "..") if (is_dir($directory. "/" . $file)) $array_items[] = $file; closedir($handle);
		return $array_items;	
	}
}