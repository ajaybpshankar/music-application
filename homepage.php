<?php
session_start();
if(isset($_SESSION['login_admin']))
{
 include_once 'home.php';
 }
 else
 {
 header("location:login.html?session=end");
 }
 ?>
