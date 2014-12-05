<?php
/**
 * Created by PhpStorm.
 * User: BerEduardo
 * Date: 26/09/14
 * Time: 12:24 PM
 */
include_once('Materia.php');
include('db.php');
$mat=new Materia();
$mat->muestraMaterias($_GET['maestro']);
?>