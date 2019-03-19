<?php
session_start(); 
if($_SESSION['inicio']!="si" || $_SESSION['tipo']!="2")
{
  header('location:index.php'); 
}
?>
