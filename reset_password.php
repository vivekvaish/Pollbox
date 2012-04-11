<?php

include"master_inc.php";

		  $email = $_REQUEST['email'];
		  $pw_url = $_REQUEST['password'];
		  
// Connect to server and select databse.

$sql="SELECT * FROM users WHERE email='$email' AND password='$pw_url'";

$result=mysql_query($sql);

// Mysql_num_row is counting table rows

$count=mysql_num_rows($result);

// If result matches $myusername and $mypassword, table row must be 1 row

if($count==0){


header("location:login_failed.php");


}
		  	  
//Change to temporary password:

$temp_pw_raw=date("YmdHis");   

$encrypted_temp_pw = md5($temp_pw_raw);


$query = "UPDATE `users` SET `password`='$encrypted_temp_pw',`password_hint`='' WHERE `email`='$email'"; 

// save the info to the database
$results = mysql_query( $query );

// print out the results
if( $results )

{ echo( "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'>An encrypted temporary password has been assigned.  Choose a new password in the form below:<br></font>  " );
}
else
{
die( "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Trouble saving information to the database:</font><br><br> " . mysql_error() );
}


?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pollbox | Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="activitypage.css" rel="stylesheet">
    <!-- Le styles -->
   
  	<link href="bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="link.css" type="text/css" media="screen">	
	 
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>
<body>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
	    <div class="container">
          <a class="brand" href="activity_page.php"><img src="1.jpg"><img src="logo1.png"></a>
          <div class="nav-collapse">
            <ul class="nav">
			<li class="active"><a href="./activity_page.php">Home</a></li>
              <li><a href="create_poll\form.php" >Create Poll</a></li>
			  <li><a href="my_poll.php" >My Polls</a></li>
              <li><a href="aboutus.html" >About Us</a></li>
			  <li><a href="logout.php">Log out </a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>
<div class="hero-unit2">

<div align="center">
  <p><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Password Reset </strong></font></p>
  <form action="reset_password_save.php" method="post" name="form" id="form">
  <TABLE cellSpacing="0" cellPadding="10" width="30%" border="0">
    <TBODY>
      <TR>
        <TD width="171"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Username</font></TD>
        <TD width="204"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <?php 
		  
		  $query = "SELECT * FROM users WHERE email='$email' AND password='$encrypted_temp_pw'";

$numresults=mysql_query($query);
$numrows=mysql_num_rows($numresults); 

// get results
$result = mysql_query($query) or die("Couldn't execute query");

// now you can display the results returned
while ($row= mysql_fetch_array($result)) {

$username= $row["username"];
$email= $row["email"];
$password= $row["password"];
		  
		  echo $username;
		  
		  }
		  
		   ?>
          <input type = "hidden" value="<?php echo $email; ?>" name="email" width="50" />
          <input type = "hidden" value="<?php echo $username; ?>" name="username" width="50" />
</font></TD>
      </TR>
    </TBODY>
  </TABLE>
  <TABLE cellSpacing="0" cellPadding="10" width="30%" border="0">
    <TBODY>
      <TR>
        <TD width="171"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">New Password</font></TD>
        <TD width="204"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <INPUT type = "password" value="" name="password" width="50">
        </font></TD>
      </TR>
    </TBODY>
  </TABLE>
  <TABLE cellSpacing="0" cellPadding="10" width="30%" border="0">
    <TBODY>
      <TR>
        <TD width="171"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Confirm New Password </font></TD>
        <TD width="204"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <INPUT type = "password" value="" name="password_confirm" width="50">
        </font></TD>
      </TR>
	  <TR>
        <TD><font size="2" face="Verdana, Arial, Helvetica, sans-serif">New Password Hint </font></TD>
        <TD width="204"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <INPUT type = "text" value="" name="password_hint" width="80">
        </font></TD>
      </TR>
    </TBODY>
  </TABLE>
  <p><font size="1" face="Arial, Helvetica, sans-serif">
    <input type="submit" value="Save and Continue" name="submit2" />
  </font></p>
  </form>
  <p>
    <?php

?>
  </p>
  <p>&nbsp;</p>
</div>



	</div>
	
	
</body>
</html>