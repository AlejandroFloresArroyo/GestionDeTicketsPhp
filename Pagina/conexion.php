<?php
$host="localhost";
$user="root";
$clave="";
$bd="sistema_tickets";
$link=mysql_connect($host,$user,$clave);
mysql_select_db($bd,$link) or die ("No se conecto a la base de datos".mysql_error());

?>