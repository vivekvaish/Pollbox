<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pollbox | Log in Failed</title>
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
  <p><A href="http://www.amsmerchant.com" target="_blank"></A>  <strong><font size="4" face="Verdana, Arial, Helvetica, sans-serif">Errors</font></strong><br />
    <a href="login.php"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Login</font></a></p>
  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><?php
    $username_already_in_use = $_REQUEST['username_already_in_use'];
	$email_already_in_use = $_REQUEST['email_already_in_use'];
	$pw_insecure = $_REQUEST['pw_insecure'];
	$bad_email = $_REQUEST['bad_email'];
	$username_too_short = $_REQUEST['username_too_short'];
	
		if($username_too_short==104){echo"<font size='2' color='#ff0000' face='Verdana, Arial, Helvetica, sans-serif'>
That username is too short.  Please make it more than 4 characters.<br><br></font>";}
	
	if($username_already_in_use==104){echo"<font size='2' color='#ff0000' face='Verdana, Arial, Helvetica, sans-serif'>
That username is already in use.  Please try again or log in to your existing account.<br><br></font>";}

	if($email_already_in_use==104){echo"<font size='2' color='#ff0000' face='Verdana, Arial, Helvetica, sans-serif'>
That email is already in use.  That probably means you have an existing account. Log in or <a href='email_password.php'>reset your password</a><br><br></font>";}

	if($pw_insecure==104){echo"<font size='2' color='#ff0000' face='Verdana, Arial, Helvetica, sans-serif'>
Your Password is not formatted correctly.  Please choose a password that is between 4 and 20 characters and has at least 1 uppercase letter, one lower case letter and one number I.E. <i>Hello23</i>.<br><br></font>";}
	
    if($bad_email==104){echo"<font size='2' color='#ff0000' face='Verdana, Arial, Helvetica, sans-serif'>
Your email does not appear to be valid<br><br></font>";}


  ?></td>
    </tr>
  </table>
  <form action="user_add_save.php" method="post" name="form" id="form">
    <table width="474" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="177"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Username</font></td>
        <td width="277"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <input type = "text" value="<?php echo$username; ?>" name="username" width="50" />
        </font></td>
      </tr>
      <tr>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Password</font></td>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <input type = "text" value="<?php echo$password; ?>" name="password" width="50" />
        </font></td>
      </tr>
      <tr>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Last Name </font></td>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <input type = "text" value="<?php echo$lastname; ?>" name="lastname" width="50" />
        </font></td>
      </tr>
      <tr>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">First name </font></td>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <input type = "text" value="<?php echo$firstname; ?>" name="firstname" width="50" />
        </font></td>
      </tr>
      <tr>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Email</font></td>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <input type = "text" value="<?php echo$email; ?>" name="email" width="50" autocomplete="OFF" />
        </font></td>
      </tr>
      <tr>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Phone</font></td>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <input type = "text" value="<?php echo$phone; ?>" name="phone" width="50" autocomplete="OFF" />
        </font></td>
      </tr>
      <tr>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Password Hint </font></td>
        <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
          <input type = "text" value="<?php echo$password_hint; ?>" name="password_hint" width="50" />
        </font></td>
      </tr>
    </table>
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