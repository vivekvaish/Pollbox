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
		  <li><a href="login.php">Log in</a></li>
              <li><a href="aboutus.html" >About Us</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>
<div class="hero-unit2">

<div align="center">

  <form action="user_add_save.php" method="post" name="form" id="form">
    <p><strong><font size="4" face="Verdana, Arial, Helvetica, sans-serif">Add User </font></strong><br />
        
    <table width="474" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td width="177"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Username</font></td>
      <td width="277"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
        <input type = "text" value="<?php echo$username; ?>" name="username" width="50" />
      </font></td>
    </tr>
    <tr>
      <td bgcolor="ebebeb"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Password</font></td>
      <td bgcolor="ebebeb"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
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
      <td bgcolor="ebebeb"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">First name </font></td>
      <td bgcolor="ebebeb"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
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
      <td bgcolor="ebebeb"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Phone</font></td>
      <td bgcolor="ebebeb"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
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