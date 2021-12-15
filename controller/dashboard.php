<?php

  // check is loged in
  !$is_login ? die(header("Location: ". base_url() ."/login.php")) : null;

  // create new post
  function create_new_post()
  {
    global $mysql;

    // perpare input
    $user_id = request_session()->data['user_id'];
    $title   = request_post()->title;
    $message = request_post()->message;

    // query insert
    $sql = "INSERT INTO posts(user_id, title, message) VALUES ('{$user_id}', '{$title}', '{$message}')";
    $mysql->query($sql);
    
    echo $mysql->affected_rows == 1
    ? '<div class="alert alert-success mt-3 mx-2" role="alert">Success Create New Post!</div>'
    : '<div class="alert alert-danger mt-3 mx-2" role="alert">Failed Create New Post!</div>';
  }