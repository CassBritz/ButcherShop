<?php
$template = '<html>
	<body bgcolor="#f9f9f9" link="#21759B" alink="#21759B" vlink="#21759B" marginheight="0" topmargin="0" marginwidth="0" leftmargin="0" style="margin: 0px; background-color: #f9f9f9; font-family: Helvetica, Arial, sans-serif;">
		<table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f9f9f9" border="0">
			<tr>
				<td style="padding:15px;" align="center">
					<center>
						<table width="550" cellpadding="0" bgcolor="#ffffff" cellspacing="0" >
							<tr>
								<td>
									<div style="border:solid 1px #d9d9d9;">
										<table id="header" width="100%;" border="0" cellpadding="0" bgcolor="#ffffff" cellspacing="0" style="line-height:1.5;font-size:12px;font-family: Helvetica, Arial, sans-serif;border:solid 1px #FFFFFF;">
											<tr>
												<td colspan="2" background="%blog_url%/wp-admin/images/white-grad-active.png" height="30">&nbsp;</td>
											</tr>
											<tr >
												<td style="line-height:32px;padding: 0 0 0 30px;" valign="baseline">
													<span style="font-size:32px;"><a href="%blog_url%" style="text-decoration:none;" target="_blank">%blog_name%</a></span>
												</td>
												<td style="padding: 0 30px 0 0;" align="right" valign="baseline">
													<span style="font-size:14px;color:#777777">%blog_description%</span>
												</td>
											</tr>
										</table>
										<table id="content" width="100%;" border="0" cellpadding="0" bgcolor="#ffffff" cellspacing="0" style="color:#444;line-height:1.5;font-size:12px;font-family: Arial, sans-serif;padding:20px 30px 0 30px;">
											<tr>
												<td colspan="2" style="padding:20px 0;border-top: solid 1px #d9d9d9">%content%</td>
											</tr>
										</table>
										<table id="footer" width="100%;" border="0" cellpadding="0" bgcolor="#ffffff" cellspacing="0" style="line-height:1.5;font-size:12px;font-family: Arial, sans-serif;padding:0 30px 15px 30px;">
											<tr style="font-size:11px;color:#777777;">
												<td style="border-top: solid 1px #d9d9d9;" colspan="2">
													<img style="padding:15px 0 0 0" height="32" width="32" src="%blog_url%/wp-admin/images/wp-logo.png" align="right" alt="' . __('Powered by Wordpress', 'wpbe') . '" />
													<div style="padding:15px 0 1px 0"><img height="13" width="13" style="vertical-align: middle;" src="%blog_url%/wp-admin/images/date-button.gif" alt="' . __('Date') . '"  /> ' . __('Email sent the', 'wpbe') . ' %date% @ %time%</div>
													<div><img height="12" width="12" style="vertical-align: middle;" src="%blog_url%/wp-admin/images/comment-grey-bubble.png" alt="' . __('Contact') . '"  /> ' . __('For any request, please contact', 'wpbe') . ' <a href="mailto:%admin_email%">%admin_email%</a></div>
												</td>
											</tr>
										</table>
									</div>
								</td>
							</tr>
						</table>
					</center>
				</td>
			</tr>
		</table>
	</body>
</html>';
?>