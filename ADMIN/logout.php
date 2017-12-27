<?php
  echo "<script>alert('Logged out sucessfully ..')</script>";
  session_start();
  session_destroy();
session_regenerate_id(true);  
  include("index.php");
  ?>