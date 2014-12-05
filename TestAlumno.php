<?php
/**
 * Created by PhpStorm.
 * User: MAQ8-LAB2-TIC
 * Date: 12/09/14
 * Time: 06:35 PM
 */
include("db.php");
require('Usuario.php');
require('Maestro.php');
$usu = new Maestro();
$usu->Nombre="yo";
$usu->altaUsuario();
$usu->modificarUsuario();
$usu->reporteUsuario();
echo"<br><br>";
$usu->reporteUsuario2(1);


?>