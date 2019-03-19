<?php
session_start(); 
if($_SESSION['inicio']!="si" || $_SESSION['tipo']!="3")
{
  header('location:index.php'); 
}
?>
