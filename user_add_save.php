<?php
include"master_inc.php";
$lastname = strip_tags(substr($_POST['lastname'],0,32));
$firstname = strip_tags(substr($_POST['firstname'],0,32));
$phone = strip_tags(substr($_POST['phone'],0,32));
$password_hint=$_REQUEST['password_hint'];
//user unique?
$username = strip_tags(substr($_POST['username'],0,32));
if(trim($username)!=='' || strlen(trim($username)) >= 4){
//email unique?
$sql="SELECT * FROM users WHERE username='$username'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count>0){
$username_already_in_use = 104;
}

}else{
$username_too_short = 104;}

//email format check
$email_raw = $_REQUEST['email'];
if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@([a-z0-9-]{2,3})+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_raw))
{ 
$email = $email_raw;
}else{
$bad_email=104;
} 
//email unique?
$sql="SELECT * FROM users WHERE email='$email'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count>0){
$email_already_in_use=104;
}
//Secure Password Format Checks
$pw_clean = strip_tags(substr($_POST['password'],0,32));
if (preg_match("/[a-z]/", $pw_clean, $matches)) {
}else{
$pw_insecure = 104;
}
if($username_already_in_use==104 OR $email_already_in_use==104 OR $pw_insecure==104 OR $bad_email==104 OR $username_too_short==104){
header(
"location:user_add_errors.php?pw_insecure=$pw_insecure&email_already_in_use=$email_already_in_use&username_already_in_use=$username_already_in_use&bad_email=$bad_email&username_too_short=$username_too_short");
die();
}
//End Error Checks_________________________________________________________

//Encrypt Password
$encrypted_pw = md5($pw_clean);
$query = "INSERT INTO `users` (`username`,
`password`,
`lastname`,
`firstname`,
`email`,
`phone`,
`password_hint`)
VALUES
(
'$username',
'$encrypted_pw',
'$lastname',
'$firstname',
'$email',
'$phone',
'$password_hint')"; 
// save the info to the database
$results = mysql_query( $query );
// print out the results
if( $results )
{
echo( "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Your changes have been made sucessfully. <br><br><a href='login.php'>Back to login</a></font> " );
}
else
{
die( "Trouble saving information to the database: " . mysql_error() );
}
//email unique?
$sql="SELECT * FROM users";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){

$query = "UPDATE `users` SET `permissions`='5' WHERE `email`='$email'"; 
// save the info to the database
$results = mysql_query( $query );
// print out the results
if( $results )
{ echo( "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'><br><br>Since this is the first user in the database we have configured the account with administrative privileges. Subsequent changes to permission levels can be made in the database. Thank you.<br></font> " );
}
else
{
die( "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Trouble saving information to the database:</font> " . mysql_error() );
}

}
?>

