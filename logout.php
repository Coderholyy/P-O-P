<?php
  date_default_timezone_set('asia/kolkata');
  include 'comments.inc.php';
  session_start();
  session_destroy();
  header('Location: index.php?logoutsuccess');
?>