<?php
/*	Project:	EQdkp-Plus
 *	Package:	Last Comments Portal Module
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2016 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if(!defined('EQDKP_INC')){
	header('HTTP/1.0 404 Not Found');exit;
}

class search_portal extends portal_generic {
	protected static $path = 'search';
	
	protected static $data = array(
		'name'			=> 'Search Module',
		'version'		=> '1.0.0',
		'author'		=> 'GodMod',
		'icon'			=> 'fa-search',
		'contact'		=> EQDKP_PROJECT_URL,
		'description'	=> 'Shows a search form',
		'multiple'		=> false,
		'lang_prefix'	=> 'pmsearch_'
	);
	protected static $apiLevel = 20;
	
	protected static $install = array(
		'autoenable'		=> '1',
		'defaultposition'	=> 'right',
		'defaultnumber'		=> '2',
	);
	public $template_file = 'search_portal.html';
	
	public function get_settings($state){
		$settings = array();
		
		return $settings;
	}
	
	public function output(){
		

		return 'Error: Template file is empty.';
	}
}
?>