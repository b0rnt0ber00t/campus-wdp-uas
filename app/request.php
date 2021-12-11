<?php

  // method get
  function request_get() { return (object) $_GET; }

  // method post
  function request_post() { return (object) $_POST; }

  // method files
  function request_files() { return (object) $_FILES; }

  // session
  function request_session() { return (object) $_SESSION; }