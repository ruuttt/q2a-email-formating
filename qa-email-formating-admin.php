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
		
		if (qa_clicked('plugin_email_formating_save_button')) {
			qa_opt('plugin_email_formating_overrule_HTML_emails', (bool)qa_post_text('plugin_email_formating_overrule_HTML_emails'));
			qa_opt('plugin_email_formating_body', qa_post_text('plugin_email_formating_body'));
			$saved=true;
		}
		
		return array(
			'ok' => $saved ? 'Tag descriptions settings saved' : null,
			
			'fields' => array(
				array(
					'label' => 'enable also for HTML based emails',
					'type' => 'checkbox',
					'value' => (bool)qa_opt('plugin_email_formating_overrule_HTML_emails'),
					'tags' => 'NAME="plugin_email_formating_overrule_HTML_emails"',
				),

				array(
					'label' => 'Body (the plugin will replace ^body and ^title) :',
					'type' => 'text',
					'rows' => '10',
					'value' => qa_opt('plugin_email_formating_body'),
					'tags' => 'NAME="plugin_email_formating_body"',
				),
			),
			
			'buttons' => array(
				array(
					'label' => 'Save Changes',
					'tags' => 'NAME="plugin_email_formating_save_button"',
				),
			),
		);
	}		

		function option_default($option) {

			switch($option) {
				case 'plugin_email_formating_overrule_HTML_emails':
				  return false;
				case 'plugin_email_formating_body':
					return '<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cato2</title>
</head>
	<body style="background:#3d7cc3; margin:0; padding:0;">
	
		<table cellspacing="0" style="background:#3d7cc3; height:100%; padding:0; width:100%;">
			<tr>
				<td style="padding:0; vertical-align:top;">
				
					<center>
											
						<table cellspacing="0" style="padding:0; width:717px">
							<tr>
								<td style="padding:0; vertical-align:text-top; width:75px;">
									<img src="http://www.co2-cato.org/images/e-mail/mailing_header_1.gif" style="display:block; height:220px; width:75px;">
								</td>
								<td style="padding:0; vertical-align:top; width:567px">
								
									<table cellspacing="0" style="padding:0;">
										<tr>
											<td style="padding:0; height: 83px; width:567px;">
												<img src="http://www.co2-cato.org/images/e-mail/mailing_header_2.gif" style="display:block; height: 83px; width:450px;">
											</td>											
										</tr>
										<tr>
											<td style="height:45px; padding:0;">
												<img src="http://ccs.ecofys.com/ImplementationPlan/mail_header.gif" style="display:block; height: 45px; width:567px;">
											</td>
										</tr>
										<tr>
											<td style="background:#fff; padding:0;">
												
												<table cellspacing="0" style="width:567px; padding:0;">
													<tr>
														<td style="width:30px; padding:0;">&nbsp;</td>
														<td style="padding:0; text-align:left; width:507px">
														
															<!-- CREATE MARGIN FOR OUTLOOK 2007 -->
															<table cellspacing="0" style="padding:0;">
																<tr><td style="height:22px; line-height:1px; padding:0;"><img src="http://www.co2-cato.org/images/e-mail/mailing_empty.gif" style="display:block; height:22px; width:1px;"></td></tr>
															</table>
															
																																																																																																																			
															<table cellspacing="0" style="padding:0; width:507px;">
		<tr>
		<td colspan="3" style="font-family: Arial, Verdana, Helvetica, sans-serif; padding:0;">
			<h1 style="color:#0a2f83; font-size:15px; font-weight:bold; line-height:18px; margin:0; padding:0; text-align:left;">^title</h1>																	
		</td>
	</tr>
	<tr>
		<td colspan="3" style="height:8px; line-height:1px;"><img src="http://www.co2-cato.org/images/e-mail/mailing_empty.gif" style="display:block; height:8px; width:1px;"></td>
	</tr>
		<tr>
		
				
			<td align="left" valign="top" style="color:#363636; font-family: Arial, Verdana, Helvetica, sans-serif; font-size:12px; line-height:18px; padding:0; text-align:left; vertical-align:top;">
				^body
							</td>
		
		
		</tr>
</table>

																																															
														</td>
														<td style="width:30px; padding:0;">&nbsp;</td>
													</tr>
												</table>
												
											</td>
										</tr>
										<tr>
											<td style="background:#fff; height:22px; padding:0;">&nbsp;</td>
										</tr>
										<tr>
											<td style="background:#fff; height:31px; padding:0; vertical-align:top;">
												
												<table cellspacing="0" style="padding:0;">
													<tr>
														<td colspan="4" style="height:5px; padding:0; width:567px;">
															<img src="http://www.co2-cato.org/images/e-mail/mailing_footer_1-small.gif" style="display:block; height:5px; width:567px;">
														</td>
													</tr>
													<tr>
														<td style="height:21px; padding:0; width:5px;">
															<img src="http://www.co2-cato.org/images/e-mail/mailing_footer_2.gif" style="display:block; height:21px; width:5px;">
														</td>
														<td style="background:#fafafa; color:#9b9b9b; font-family: Arial, Verdana, Helvetica, sans-serif; font-size:11px; height:21px; padding:0; text-align:right; width:557px">
															
															<table cellspacing="0" style="padding:0;" align="right">
																<tr>
																	<td style="color:#9b9b9b; font-family: Arial, Verdana, Helvetica, sans-serif; font-size:11px; padding:0;"><a href="http://www.co2-cato.org/info/disclaimer" target="_blank" style="color:#9b9b9b; text-decoration:none;">Disclaimer</a></td>
																	<td style="padding:0; width:6px;"><img src="http://www.co2-cato.org/images/e-mail/mailing_empty.gif" style="display:block; height:1px; width:6px;"></td>
																	<td style="color:#9b9b9b; font-family: Arial, Verdana, Helvetica, sans-serif; font-size:11px; padding:0;">|</td>
																	<td style="padding:0; width:6px;"><img src="http://www.co2-cato.org/images/e-mail/mailing_empty.gif" style="display:block; height:1px; width:6px;"></td>
																	
																	<td style="color:#9b9b9b; font-family: Arial, Verdana, Helvetica, sans-serif; font-size:11px; padding:0;"><a href="http://www.co2-cato.org/info/copyright" target="_blank" style="color:#9b9b9b; text-decoration:none;">Copyright</a></td>
																</tr>
															</table>															
														</td>
														<td style="background:#fafafa; height:21px; width:12px;">&nbsp;</td>
														<td style="height:21px; padding:0; width:5px;">
															<img src="http://www.co2-cato.org/images/e-mail/mailing_footer_3.gif" style="display:block; height:21px; width:5px;">
														</td>
													</tr>
													<tr>
														<td colspan="4" style="height:10px; padding:0; width:567px;">
															<img src="http://www.co2-cato.org/images/e-mail/mailing_footer_4-small.gif" style="display:block; height:10px; width:567px;">
														</td>
													</tr>
												</table>
												
											</td>
										</tr>
									</table>
								
								</td>
								<td style="padding:0; width:75px;">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="3" style="height:30px; padding:10px 0;" align="center">
										
								</td>
							</tr>
						</table>
					
					</center>
					
				</td>
			</tr>
		</table>
		
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