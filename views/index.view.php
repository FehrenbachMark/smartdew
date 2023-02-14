<?php
  require_once 'views/components/head.php';
  require_once 'views/components/header.php';
  echo '<div class="">';

  if(isset($_SESSION['username'])){
    if(isset($_GET['logged_in'])){
    echo '<div id="alert" class="bg-green-500 text-white font-bold rounded-t px-4 py-2 absolute top-16 w-full text-center">You are logged in</div>';
    };
    require 'controllers/dashboard.php';
  }elseif(isset($_GET['logged_out']) && !isset($_GET['error'])){
    echo '<div id="alert" class="bg-red-500 text-white font-bold rounded-t px-4 py-2 absolute top-16 w-full text-center">You are logged out</div>';
  }
  
  echo '</div>';
  if(!isset($_SESSION['username'])){
    require_once 'views/components/login.php';
  }
  require_once 'views/components/footer.php';
?>