<?php
  !is_sign_in() && !isset(input_get()->page) ||
  !is_sign_in() || !isset(input_get()->page)
  ? route('auth') : null;