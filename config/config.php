<?php

// get base url
function base_url()
{
  return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '';
}

// get username
function get_username(int $id)
{
  global $mysql;

  // query where id = $id
  $sql = "SELECT username FROM users WHERE id='{$id}'";

  return $mysql->query($sql)->fetch_assoc()['username'];
}
