<?php
  // destroy session and return to /
  session_start();
  session_destroy();
  header('Location: /?logged_out');
?>