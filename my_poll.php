<?php 
//Set permission level threshold for this page remove if page is good for all levels
$permission_level=1;

include"auth_check_header.php";

?>	
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
 <head>
  <script language='javascript'>
function expire(id)
{
	alert("yo");
	var a=confirm("Do you want to seriously expire this poll?");
	if (a==true)
	{
		
		var url="http://10.100.70.53 :3000/api/poll/expire/"+ id;
		var obj = 	{
						expiry_date: <?php $day = date("d") - 1; $date = $day.date("-M-Y"); echo $date; ?>
					};
		$.post(url,obj);
		alert("Poll Expired. Now no one can vote.");
		window.location.reload();
	}
	else
	{
		alert("Oh that was close!! :P");
	}

}
</script>
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <meta charset="utf-8">
    <title>Poll Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="activitypage.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
	<link href="bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css" media="screen">	
<script language='javascript'>
function del(id)
{
	var r=confirm("Press a button");
if (r==true)
  {
  	var url="http://10.100.70.53 :3000/api/poll/delete/"+ id;
	var obj = {};
	$.post(url,obj);
	alert("done");
	window.location.reload();
	}
else
  {
  alert("Oh that was close!! :P");
  }
	
}
</script>
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
              <li><a href="aboutus.html" target="blank">About Us</a></li>
			  <li><a href="logout.php">Log out </a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>
<div id="wrapper1">
<div class="hero-unit2">
<!--<div class="hero-unit">-->
	
	<h1><b><?PHP echo "&nbsp;&nbsp;&nbsp; Welcome ". $username;?></b></h1>
<div class="bar"></div>
	<?php
  //always
  $ch = curl_init();
  $timeout = 5;
 //curl_setopt($ch,CURLOPT_URL,'http://10.100.70.53 :3000/api/poll/get_recent_polls_by_author/rms/'."5");
  
  //curl_setopt($ch,CURLOPT_URL,'http://10.100.70.53 :3000/api/poll/get_recent_polls_by_author/'.$username."/5");
  curl_setopt($ch,CURLOPT_URL,'http://10.100.70.53 :3000/api/poll/get_recent_polls_by_author/'.$username."/5");
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
  $data = curl_exec($ch);
  //always ended.. 

 $val = json_decode($data); //always
  
 foreach ($val as $x)
 { ?>
 <div  style="left:250px; width:900px; height:210px; border-style:solid; border-bottom-width:2px;"><a href="./polldetails.php?poll=<?php
	echo $x->_id; ?>"><?php
  //print "Author is : ".$x->who."<br/>";
  $main = $x->poll;
  echo "<table> <tr><td>";
 print "<b> Title:</b>" .$main->title."<br/>";
 echo "</td><td>";
 print "<b>Created on:</b> ".$x->when." ";
 if($x->expiry_date == "2020-12-21T18:30:00.000Z")
 {
  }
  else
 {
	print "<b>Expires on :</b> ".$x->expiry_date."<br/>";
 }
 
 echo "</td></tr><tr><td>";
 print "<b> Details:</b>".$main->description."</td><td>";
 		$l=0;$d=0;
 	  foreach ( $main->options_list as $option)
	  {
			if($option->who_likes)
		 {foreach ( $option->who_likes as $like)
		  {
			$l++;
		  }}
		  if($option->who_dislikes)
		  {foreach ( $option->who_dislikes as $dislike)
		  {
			$d++;
		  }}
	  }
	  echo "<b>Likes</b> ".$l.". <b>Dislikes</b> ".$d.". </td></tr></table></a><button class=\"btn btn-primary\" style=\"position:absolute; margin-bottom:10px; left:720px; \" onclick=\"del('$x->_id')\">View Results</button><button class=\"btn btn-primary\" style=\"position:absolute; margin-bottom:10px; left:740px; \" onclick=\"del('$x->_id')\">delete</button><br/><button class=\"btn btn-primary\" style=\"position:absolute; margin-bottom:10px; left:800px; \" onclick=\"expire('$x->_id')\">Expire Now.</button></div>";
 
 }
 
  curl_close($ch);
?>

	
	

</div>


</body>
</html>
