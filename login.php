
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>

<meta charset="utf-8">
    <title>Poll Box Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
		background-image:url(bglogin.jpg);
		   }
    </style>
    <link href="bootstrap-responsive1.css" rel="stylesheet">
	<link rel="stylesheet" href="themes\default\default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes\pascal\pascal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="orman\orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />

</head>

<body>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
	    <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="login.php"><img src="1.jpg"><img src="logo1.png"></a>
          
        </div>
      </div>
</div>
	  <div class= "loginbox"></div>
    <div class="logincss">
<a> <p><b> Just Sign in</b></p></a>
	 </br>
	 <form action="checklogin.php" method="post" name="form" id="form">
 <a>Username:</a><input type="text" name="username" value = '<?php //echo $username; ?>' class="input-xlarge" /></br>
</br>
 <a>Password:</a><input type="password" name="password" value = '<?php //echo $password; ?>' class="input-xlarge" />
</br>
</br>
<input name="submit" type="submit" value="Login" class="btn btn-primary"/>
 </br>
 </br>
 <p class="submit"><a href="user_add.php">Create a new account </a></p>

 <p class="submit"><a href="email_password.php">Forgot Password </a></p>
          <p class="submit"><a href="agent_add_form.php"></a></p>
         
      </form>
	  
</div>

<div id="slider-wrapper">
        <div class="slider-wrapper theme-default"></div>
            
            <div id="slider" class="nivoSlider">
                <img src="asd1.jpg" alt="" />
                <img src="asd2.bmp" alt="" />
				<img src="asd.png" alt="" />
				<img src="1d.jpg" alt="" />
            </div>
            
        </div>
	   	
    <script type="text/javascript" src="scripts\jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

	  <div class="hero-unit">
        <p><i>Its an era of engagement, where we try to be best in our presentation, be it clothing or our way of coding, even selection of ideas, basically </p><p>decision-making. But not all can be accomplished by self and chances are quite high that we are not with our friends and family whose opinions</p><p> really value us. Feel the need of friends help urgently? Our app is the answer. The strategy is to pay off an attempt to friends. Here you can find</p><p> out a quick solution to what you really think is a problem on large range of subjects. All you have to do is login through Facebook, create a poll, </p><p>select your friends and leave the rest to the site. It will notify your friends about the poll and they will be there for your rescue.</i></p>
        <!--<a href="">More..</a></p>-->
      
      <!-- Main hero unit for a primary marketing message or call to action -->
      <!-- Example row of columns -->
      <div class="row">
        <div class="span3">
		   <!--<a href="C:/Documents%20and%20Settings/compaq/Desktop/SEn%20PROJECT/website2/attempt.html"><img src="s1.png"></img></a>-->
          <p><img src="bfb.png"><b><i>Login to the website Poll-Box</i></b></p><p>Enter your facebook id and password. And say goodbye to any type of confusion!!</p>
          
        </div>
        <div class="span3">
          <!--<img src="s2.png"></img>-->
           <p><img src="bcp.jpg"><b><i>Create your own poll</i></b></p><p>Fill in the details about your Poll, upload the texts, images or vedios and publish it with your friends!</p>
          
       </div>
        <div class="span3">
          <!--<img src="s3.png"></img>-->
          <p><img src="btck.jpg"><b><i>Share your poll with your friends</i></b></p><p>Select the friends from your friend list from whom you want to take an opinion!</p>
          
        </div>
		<div class="span3">
          <!--<img src="s4.png"></img>-->
           <p><img src="bvr.png"><b><i>View the results of the poll.</i></b></p><p>Get the clear picture of the results that have been posted by your friends!</p>
          
       </div>
	  </div>
		</div>
      

      <div class="footer">
	  Our aim is to help people everywhere to make a decision in their state of confusion. Help them connect with their friends and family and be more sure of what they want!</br>
	  @2012 PollBox.com
	  </div>

     <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>





	  
 </body>
</html>
