<?php
	$uname=$_POST['uname'];
	
	$uname=trim($uname);
	
	// $conf_string excluded from code sample
	$conf_link = 'http://random-e-network.com/employee_conffg.php?'.$conf_string;
	
	$subject="Random-e-Network New Password Request";
	
	$content="Hello ".$fname." ".$lname.",\n \nIf you have forgotten your password, please proceed to the following link: . \n \n".$conf_link."\n \n If you believe you have recieved this message in error, plese disregard this email.";

	
	
	$toaddress = $uname."@random-e-network.com";
	$email = "Please do not reply to this email.";
	
	
	$mailcontent = 'Subject: '.$subject."\n \n".
					$content."\n";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
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
          
                            <div style="margin-top:0px">
								
																
								<?php
									require_once('phpFunctions/dbconnect.php');

									@ $db = new mysqli($hn,$un,$pw,$dbselect);
									
									$query = "SELECT count(*) FROM login WHERE uname = '$uname'";
								
									$result = $db->query($query);
    								if(!$result)
    								{
      									echo 'Cannot run query select count.';
      									exit;
    								}
    							
									$row = mysqli_fetch_row($result);
   	 								$count = $row[0];
									
									if($count > 0)
									{
										$update = "UPDATE login SET conf_string = '$conf_string' WHERE uname = '$uname'";
										
										$update_entry = $db->query($update);
										if(!$update_entry)
    									{
      										echo 'Cannot run query update.';
      										exit;
    									}

										mail($toaddress,$subject,$mailcontent,$email);
										
										echo '<br />
										<div style="text-align:left;font-weight:normal;font-size:16px;font-family:"Garamond", serif;color:#f90031">A confirmation notice has been sent to the provided email address. You must create a new password before you will be able to log in.</div>
										<br />
										<div style="text-align:center"><a href="employee_login.php"><img src="images/buttons/back.png" /></a></div>'; 
									}
									else
									{
										echo '<br />
										<div style="text-align:left;font-weight:normal;font-size:16px;font-family:"Garamond", serif;color:#f90031">The provided email address was not found. Please make sure the correct address was entered.</div>
										<br />
										<div style="text-align:center"><a href="employee_forgot.php"><img src="images/buttons/back.png" /></a></div>';
									}
									
									$db->close();
								?>
								
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />																			
                            </div>
                            
                        </td>
                        
            			
        			</tr>
        
        			<?php
						require('phpFunctions/pageFooter.php');
					?> 
	</table>

</body>
</html>