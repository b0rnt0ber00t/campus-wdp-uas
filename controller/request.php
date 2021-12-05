<?php
  // request get
  function input_get() { return (object) $_GET; }

  // request post
  function input_post() { return (object) $_POST; }

  // request files
  function input_files() { return (object) $_FILES; }

  // session sign in
  function is_sign_in() { return $_SESSION['data']['sign_in']; }