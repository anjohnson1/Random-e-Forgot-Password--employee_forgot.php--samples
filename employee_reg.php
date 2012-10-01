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
	<script src="javascript/reg_validation.js"></script>

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
                        <div class="pageSubtitle">Register&nbsp;&nbsp;</div>
                        
                        </td>
                    
                    </tr>
        
        			<tr>
        				<td width="330" align="center" valign="top">
                        	
                            <div class="sideBarTitle">Employee Services</div>
                            <div class="sideBarIndexCurrent"><a href="employee_login.php"><img src="images/buttons/selected.png" />Log In</a></div>
                           
                   
                        </td>
                        
            			<td width="825">
          
                            <div style="margin-top:8px">
		
							<div>If you are already registered with Random-e-Network's Employee Services, log in to access your profile. Registering with Random-e-Network's Employee Services will allow you to access and review company information and download forms.</div>
							
							<br />
							
							<div style="font-size:10px;text-align:center">Required information indicated by (<font color="#f90031">*</font>)</div>
							
							<br />
                            	
							<form name="registration" action="send_regconf.php" onsubmit="return validateForm()" method="post">
                            	<center><table width="600">
									<tr>
										<td><font color="#f90031">*</font>First Name: </td>
										<td width="40px"><input type="text" name="fname" size="30"/></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="#f90031">*</font>Last Name: </td>
										<td width="40px"><input type="text" name="lname" size="30"/></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="#f90031">*</font>Email Address: </td>
										<td width="40px"><input type="text" name="email" size="30"/></td>
										<td align="left">@random-e-network.com</td>
									</tr>
									<tr>
										<td colspan="3"><br /><font style="color:#f90031;">Password must be 8 characters.</font><br /><br /></td>
									</tr>
									<tr>
										<td><font color="#f90031">*</font>Password: </td>
										<td width="40px"><input type="password" name="pw" size="30"/></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="#f90031">*</font>Confirm Password: </td>
										<td width="40px"><input type="password" name="pw2" size="30"/></td>
										<td></td>
									</tr>
									<tr>
										<td colspan="3" align="center"> 
										<br />
										<font color="#f90031">reCAPTCHA is not case sensative</font>
										<br /><br />
										<?php
											// excluded from code sample
										?>
										<br />
										</td>
									</tr>
									<tr>
										<td colspan="3"><div style="text-align:center"><input type="image" src="images/buttons/submit.png" value="Submit"></div></td>
									</tr>
								</table></center>
							</form>
                                
                            </div>
                            
                        </td>
                        
            			
        			</tr>
        
        			<?php
						require('phpFunctions/pageFooter.php');
					?> 
	</table>
	
</body>
</html>