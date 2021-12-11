<?php

  // check is loged in
  !$is_login ? die(header("Location: ". base_url() ."/login.php")) : null;

  // get all post
  $user_id = request_session()->data['user_id'];
  $sql     = "SELECT * FROM posts WHERE user_id='{$user_id}' ORDER BY id DESC";
  $posts   = $mysql->query($sql);
  $posts   = $posts->fetch_all(MYSQLI_ASSOC);