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
    $file    = (object) request_files()->file;

    // if input:file != null
    if ($file->name != null) {
      // prepare file
      $file_ext  = explode('.', $file->name);
      $file_ext  = end($file_ext);
      $file_name = uniqid() . ".{$file_ext}";

      // move file from tmp to destination
      move_uploaded_file($file->tmp_name, "../assets/files/{$file_name}");
    }

    // query insert
    $sql = $file->name == null
    ? "INSERT INTO posts(user_id, title, message) VALUES ('{$user_id}', '{$title}', '{$message}')"
    : "INSERT INTO posts(user_id, title, message, file) VALUES ('{$user_id}', '{$title}', '{$message}', '{$file_name}')";

    $mysql->query($sql);
    
    echo $mysql->affected_rows == 1
    ? '<div class="alert alert-success mt-3 mx-2" role="alert">Success Create New Post!</div>'
    : '<div class="alert alert-danger mt-3 mx-2" role="alert">Failed Create New Post!</div>';
  }