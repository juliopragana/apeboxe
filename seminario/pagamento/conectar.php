<?php
$host = "mysql995.umbler.com";
$user = "peboxe";
$pass = "peboxe1234";
$dbname = "peboxe";
$con =@mysql_connect("$host","$user","$pass")or die("Nao conectado");
MYSQL_SELECT_DB($dbname) or die("N�o foi possivel conectar o banco de dados");


?>