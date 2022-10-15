<?php

// check is loged in
!$is_login ? die(header("Location: " . base_url() . "/login.php")) : null;

function update_password()
{
  global $mysql;

  // user change password validate
  if (
    empty(request_post()->old_password) ||
    empty(request_post()->new_password) ||
    empty(request_post()->conf_password)
  ) {
    echo '<div class="alert alert-danger mt-3 mx-2" role="alert">Failed Update Password!</div>';
  } else {

    // prepare
    $old_password  = request_post()->old_password;
    $new_password  = request_post()->new_password;
    $conf_password = request_post()->conf_password;
    $user_id       = request_session()->data['user_id'];

    // redirect if new != conf
    $new_password != $conf_password ? header('Location: profile.php') : null;

    // get user information
    $sql  = "SELECT * FROM users WHERE id='{$user_id}'";
    $data = $mysql->query($sql)->fetch_assoc();

    // confirm user password
    md5($old_password) != $data['password'] ? header('Location: profile.php') : null;


    // new password ecrypted
    $password = md5($new_password);

    // update password
    $sql = "UPDATE users SET password='{$password}' WHERE id='{$user_id}'";
    $mysql->query($sql);

    echo $mysql->affected_rows == 1
      ? '<div class="alert alert-success mt-3 mx-2" role="alert">Success Update Password!</div>'
      : '<div class="alert alert-danger mt-3 mx-2" role="alert">Failed Update Password!</div>';
  }
}
