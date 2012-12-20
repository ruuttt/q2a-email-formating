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

class qa_email_formating_admin {

	function allow_template($template){
		return ($template!='admin');
	}

function admin_form(&$qa_content)
	{
		$saved=false;
		
		if (qa_clicked('email_formating_save_button')) {
			qa_opt('email_formating_overrule', (bool)qa_post_text('email_formating_overrule'));
			qa_opt('email_formating_body', qa_post_text('email_formating_body'));
			$saved=true;
		}
		
		return array(
			'ok' => $saved ? 'Email formating settings saved' : null,
			
			'fields' => array(
				array(
					'label' => 'enable also for HTML based emails',
					'type' => 'checkbox',
					'value' => qa_opt('email_formating_overrule'),
					'tags' => 'NAME="email_formating_overrule"',
				),

				array(
					'label' => 'Body (^body and ^title will get value of plain text body and subject. ^site_title and ^site_url will be replaced with your site name and url, ^logo_url with the logo of your site) :',
					'type' => 'text',
					'rows' => '10',
					'value' => qa_opt('email_formating_body'),
					'tags' => 'NAME="email_formating_body"',
				),
			),
			
			'buttons' => array(
				array(
					'label' => 'Save Changes',
					'tags' => 'NAME="email_formating_save_button"',
				),
			),
		);
	}		

		function option_default($option) {

			switch($option) {
				case 'email_formating_overrule':
				  return false;
				case 'email_formating_body':
					return '<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
<style type="text/css">
body, td {
margin: 0px;
}

bodytemplate body, td {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 11px;
color: #000000;
}

bodytemplate a {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 11px;
color: #003399;
text-decoration:underline;
}

bodytemplate a:visited {
font-size: 11px;
color: #003399;
text-decoration:underline;
}

bodytemplate a:hover {
font-size: 11px;
color: #003399;
text-decoration:none;
}

openhtml {
color: #666666;
font-size: 10px;
height: 26px;
}

openhtml a {
font-family: Verdana, Arial, Helvetica, sans-serif;
color: #666666;
font-size: 10px;
text-decoration: underline;
}

openhtml a:visited {
color: #666666;
font-size: 10px;
text-decoration: underline;
}

openhtml a:hover {
color: #666666;
font-size: 10px;
text-decoration: none;
}

ECOinhoud a {
font-family: Verdana, Arial, Helvetica, sans-serif;
color: #003399;
font-size: 11px;
text-decoration: underline;
}

ECOinhoud a:visited {
color: #003399;
font-size: 11px;
text-decoration: underline;
}

ECOinhoud a:hover {
color: #003399;
font-size: 11px;
text-decoration: none;
}

b, strong {
color:#1b8b35;
font-weight:bold;
}

h2 {
font-size:14px;
color:#003399;
}

afmelden {
color: #ffffff;
font-size: 11px;
height: 20px;
}

afmelden a {
font-family: Verdana, Arial, Helvetica, sans-serif;
color: #ffffff;
font-size: 11px;
text-decoration: underline;
}

afmelden a:visited {
color: #ffffff;
font-size: 11px;
text-decoration: underline;
}

afmelden a:hover {
color: #ffffff;
font-size: 11px;
text-decoration: none;
}

emailadres {
color: #666666;
font-size: 10px;
height: 26px;
}

emailadres a {
font-family: Verdana, Arial, Helvetica, sans-serif;
color: #666666;
font-size: 10px;
text-decoration: underline;
}

emailadres a:visited {
color: #666666;
font-size: 10px;
text-decoration: underline;
}

emailadres a:hover {
color: #666666;
font-size: 10px;
text-decoration: none;
}

bodytemplate {
text-align: center;
}

mpFormDescription { padding-left:2px; padding-right:2px; margin-top: 0px; padding-top: 0px; text-align: center;}

mpFormAnswer { text-align: center;}

mpFormLabel { vertical-align:top;}

mpFormField { vertical-align:top;}

mpTextArea { width:200px; height:70px;}

mpRssTitle {
font-size:12px;
margin-bottom:0px;
}

mpRssClickThrough a, .mpRssClickThrough a:hover {
color:#000000;
text-decoration:underline;
}

mpRssClickThrough a:visited {
color:#000000;
text-decoration:underline;
}</style>
</head>
<body><style type="text/css">
body, td {
margin: 0px;
}

bodytemplate body, td {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 11px;
color: #000000;
}

bodytemplate a {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 11px;
color: #003399;
text-decoration:underline;
}

openhtml {
color: #666666;
font-size: 10px;
height: 26px;
}

openhtml a {
font-family: Verdana, Arial, Helvetica, sans-serif;
color: #666666;
font-size: 10px;
text-decoration: underline;
}

b, strong {
color:#1b8b35;
font-weight:bold;
}

h2 {
font-size:14px;
color:#003399;
}

afmelden {
color: #ffffff;
font-size: 11px;
height: 20px;
}



emailadres {
color: #666666;
font-size: 10px;
height: 26px;
}


bodytemplate {
text-align: center;
}

mpFormDescription { padding-left:2px; padding-right:2px; margin-top: 0px; padding-top: 0px; text-align: center;}

mpFormAnswer { text-align: center;}

mpFormLabel { vertical-align:top;}

mpFormField { vertical-align:top;}

mpTextArea { width:200px; height:70px;}

mpRssTitle {
font-size:12px;
margin-bottom:0px;
}

mpRssClickThrough a, .mpRssClickThrough a:hover {
color:#000000;
text-decoration:underline;
}

mpRssClickThrough a:visited {
color:#000000;
text-decoration:underline;
}</style>
&nbsp;
<table height="100%" cellspacing="0" cellpadding="0" width="100%" border="0">

<tbody>
<tr>
<td class="bodytemplate" valign="top" bgcolor="#ffffff" style="text-align: center">
<table cellspacing="0" cellpadding="0" width="600" align="center" border="0">
<tbody>
<tr>
<td align="left" bgcolor="#07245e" colspan="5"><img height="229" alt="" width="600" border="0" src="^site_url/qa-plugin/email-formating/wind_energy.jpg"></td>
</tr>
<tr>
<td valign="top" align="left" width="10" bgcolor="#3b61ae">&nbsp;</td>
<td class="afmelden" align="left" bgcolor="#3b61ae" colspan="4" height="20" style="font-size: 11px; color: rgb(255,255,255); font-family: Verdana,Arial,Helvetica,sans-serif">&nbsp;&nbsp;&nbsp;<a target="_blank" href="^site_url">^site_title</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a target="_blank" href="^site_urlfeedback">Unsubscribe</a></td>

</tr>
<tr>
<td colspan="5"><img height="23" alt="" width="600" border="0" src="^site_url/qa-plugin/email-formating/header2.gif"></td>
</tr>
<tr>
<td valign="top" align="left" width="10" bgcolor="#fff9e8">&nbsp;</td>
<td valign="top" align="left" width="390" bgcolor="#fff9e8">&nbsp;</td>
<td valign="top" align="left" width="180" bgcolor="#fff9e8">&nbsp;</td>
<td valign="top" align="left" width="10" bgcolor="#fff9e8">&nbsp;</td>

</tr>
<tr>
<td valign="top" align="left" width="10" bgcolor="#fff9e8"><img height="12" alt="" width="10" border="0" src="^site_url/qa-plugin/email-formating/header3.gif"></td>
<td valign="top" align="left" width="390" bgcolor="#fff9e8">
<table cellspacing="0" cellpadding="10" width="100%" border="0">
<tbody>
<tr>
<td valign="top" align="left" bgcolor="#ffffff" style="font-size: 11px; font-family: Verdana,Arial,Helvetica,sans-serif">
<h2 style="font-size: 14px; color: rgb(0,51,153)">^title</h2>
<font style="font-family: Verdana"><span>
^body
</span></font></td>

</tr>
</tbody>
</table>
</td>
<td valign="top" align="left" width="180" bgcolor="#fff9e8">
<table cellspacing="0" cellpadding="8" width="100%" border="0">
<tbody>
<tr>
<td valign="top" align="left" bgcolor="#3b61ae" style="font-size: 14px; color: rgb(255,255,255); font-family: Verdana,Arial,Helvetica,sans-serif"><i>Sidebar title</i></td>

</tr>
<tr>
<td class="ECOinhoud" valign="top" align="left" bgcolor="#ffffff" style="border-right: rgb(59,97,174) 1px solid; font-size: 11px; border-left: rgb(59,97,174) 1px solid; line-height: 140%; border-bottom: rgb(59,97,174) 1px solid; font-family: Verdana,Arial,Helvetica,sans-serif">Sidebar body</td>
</tr>
</tbody>
</table>
&nbsp;&nbsp;</td>
<td valign="top" align="left" width="10" bgcolor="#fff9e8"><img height="12" alt="" width="10" border="0" src="^site_url/qa-plugin/email-formating/header3.gif"></td>

</tr>
<tr>
<td bgcolor="#000000" colspan="5" style="text-align: center"><img border="0" src="^logo_url"></td>
</tr>
<tr>
<td class="emailadres" colspan="5" style="font-size: 10px; font-family: Verdana,Arial,Helvetica,sans-serif; height: 26px; text-align: center">&nbsp;</td>
</tr>
</tbody>
</table>

<br>
&nbsp;</td>
</tr>
</tbody>
</table>
<br>
</body>
</html>';

				default:
					return null;
			}

		}


}

/*
	Omit PHP closing tag to help avoid accidental output
*/