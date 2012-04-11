
<div align="center">

  <form action="user_add_save.php" method="post" name="form" id="form">
    <p><strong><font size="4" face="Verdana, Arial, Helvetica, sans-serif">Add User </font></strong><br />
        <a href="login.php"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Login</font></a></p>
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
