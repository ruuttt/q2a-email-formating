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

	function qa_send_email($params)
	{
		require_once QA_INCLUDE_DIR.'qa-util-string.php';
		if (!$params['html'] || qa_opt('plugin_email_formating_overrule_HTML_emails')){
			$body = "<p>".strtr(qa_html($params['body']),array("\n"=>"</p><p>"))."</p>";
	    $params['body'] = strtr(qa_opt('plugin_email_formating_body'), array("^body" => $body,"^title"=> $params['subject']));
			$params['html'] = true;
		}
		return qa_send_email_base($params);
	}

/*
	Omit PHP closing tag to help avoid accidental output
*/
