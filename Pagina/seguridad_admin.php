<?php
session_start(); 
if($_SESSION['inicio']!="si" || $_SESSION['tipo']!="1")
{
  header('location:index.php'); 
}
?>
