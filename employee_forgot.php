<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Random-e-Network | Employee Services</title>

<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

<!-- JAVASCRIPT -->
    
	<script src="javascript/jquery.js"></script>
    <script src="javascript/jquery.easing.1.3.js"></script>
    <script src="javascript/hoverIntent.js"></script>
    <script src="javascript/dropdown.js"></script>
	<script src="javascript/forgot_validation.js"></script>

</head>

<body>

<!-- NAVIGATION --->
	<?php
		require ('phpFunctions/navigation.php');
	?>
        

<!-- PAGE BODY -->       			
                
                <table width="1155px" align="center" border="0" cellpadding="0" cellspacing="0"> 

					<tr>
                    	<td colspan="2" class="pageHeader" style="background-image:url(images/borders/pagetitle.jpg)">
                        <div class="pageTitle">Employee Services&nbsp;</div>
                        <div class="pageSubtitle">Forgot Password&nbsp;&nbsp;</div>
                        
                        </td>
                    
                    </tr>
        
        			<tr>
        				<td width="330" align="center" valign="top">
                        	
                            <div class="sideBarTitle">Employee Services</div>
                            <div class="sideBarIndexCurrent"><a href="employee_login.php"><img src="images/buttons/selected.png" />Log In</a></div>
                           
                   
                        </td>
                        
            			<td width="825">
          
                            <div style="margin-top:8px">
                            
							<div>If you have forgotten your password, please enter your Random-e-Network email address name. An email will be sent to the provided address with a confirmation to change your password. If you are not already registered, register <a href="employee_reg.php"><font style="font-weight:bold;">here.</font></a> If you reached this page by mistake, please log in to access your profile.</div>
							
							<br />

							<form name="forgot" action="send_forgot.php" onsubmit="return validateForm()" method="post">
                            	<center><table width="500">
									<tr>
										<td>Email: </td>
										<td width="40px"><input type="text" name="uname" size="30"/></td>
										<td align="left">@random-e-network.com</td>
									</tr>
									<tr>
										<td colspan="3"><center><input type="image" src="images/buttons/submit.png" value="Log In"></center></td>
									</tr>
								</table></center>
							</form>
							<center><table>
									<tr>
										<td colspan="3"><center><font style="font-size:10px"><a href="employee_reg.php">Register</a> | <a href="employee_login.php">Log In</a></font></center></td>
									</tr>
                            </table></center>

							<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

                            </div>
                            
                        </td>
                        
            			
        			</tr>
        
        			<?php
						require('phpFunctions/pageFooter.php');
					?> 
	</table>
    
</body>
</html>
