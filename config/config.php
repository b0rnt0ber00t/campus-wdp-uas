<?php
  // get base url
  function base_url()
  {
    return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/big-project-wdp';
  }

  // get username
  function get_username($id)
  {
    global $mysql;

    $sql = "SELECT username FROM users WHERE id='{$id}'";
    return $mysql->query($sql)->fetch_assoc()['username'];
  }