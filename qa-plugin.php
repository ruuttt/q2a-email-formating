<?php

/*
	Ecofys (c) Ruut Brandsma
	http://www.ecofys.com/


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

/*
	Plugin Name: Email Formating
	Plugin URI: https://github.com/ruuttt/q2a-email-formating
	Plugin Description: enables you to apply html based formatting to all e-mails send out.
	Plugin Version: 1.0
	Plugin Date: 2012-12-20
	Plugin Author: Ecofys/Ruut Brandsma
	Plugin Author URI: http://www.ecofys.com/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: 
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}
	
	qa_register_plugin_overrides( 'qa-email-formating.php' // PHP file containing override function class
	);
	qa_register_plugin_module(
		'module', // type of module
		'qa-email-formating-admin.php', // PHP file containing module class
		'qa_email_formating_admin', // module class name in that PHP file
		'E-mail formating Admin' // human-readable name of module
);	

/*
	Omit PHP closing tag to help avoid accidental output
*/