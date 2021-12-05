<?php
  // redirect page
  function route(string $page, string $view='index')
  {
    require_once('page/' . $page . '/' . $view . '.php');
  }