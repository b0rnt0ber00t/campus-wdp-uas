<?php

  // check is loged in
  !$is_login ? die(header("Location: ". base_url() ."/login.php")) : null;

  // get my post
  function my_post()
  {
    global $mysql;

    $user_id = request_session()->data['user_id'];
    // query select all order desc
    $sql     = "SELECT * FROM posts WHERE user_id='{$user_id}' ORDER BY id DESC";

    return $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
  }

  function get_post($id)
  {
    global $mysql;

    // query select where id=id
    $sql = "SELECT * FROM posts WHERE id='{$id}'";

    return $mysql->query($sql)->fetch_assoc();
  }

  function update_post()
  {
    global $mysql;

    // prepare
    $post_id = request_get()->post_id;
    $title   = request_post()->title;
    $message = request_post()->message;

    // query update where id=post_id
    $sql = "UPDATE posts SET title='{$title}', message='{$message}' WHERE id='{$post_id}'";
    $mysql->query($sql);

    echo $mysql->affected_rows
    ? '<div class="alert alert-success mt-3 mx-2" role="alert">Success Update Post!</div>'
    : '<div class="alert alert-danger mt-3 mx-2" role="alert">Failed Update Post!</div>';
  }

  function delete_post()
  {
    global $mysql;

    // prepare
    $post_id = request_get()->delete_post_id;

    // redirect if post not found
    get_post($post_id) == null ? header('Location: '. base_url() . '/dashboard/post.php') : null;

    // query delete where id=post_id
    $sql = "DELETE FROM posts WHERE id='{$post_id}'";
    $mysql->query($sql);

    echo $mysql->affected_rows
    ? '<div class="alert alert-success mt-3 mx-2" role="alert">Success Delete Post! refresh page!</div>'
    : '<div class="alert alert-danger mt-3 mx-2" role="alert">Failed Delete Post!</div>';
  }