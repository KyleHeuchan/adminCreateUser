?<?php
// create user name password email and access
    function createUser($fname, $username, $password, $email, $userlvl)
    {
      include('connect.php');

      $salt = md5($password);
      $encryptPassword = crypt($password, $salt);

      $userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$encryptPassword}', '{$email}', CURRENT_TIMESTAMP, '{$userlvl}', 'no')";
      echo $userString;

      $userQuery = mysqli_query($link, $userString);

      if($userQuery) {
        redirect_to("admin_index.php");

        mail($email, 'User Account and Password', 'Thanks for making an account, here is your account name and password.', $username, $password, $url);

        randomSetPassword();
        // I attempted to make the randompassword work and trigger properly but couldn't really get it work properly.
      } else {
        $message = "Error created attempting to process your request to server.";
        return $message;

    }


}

    mysqli_close($link);

}

 ?>
