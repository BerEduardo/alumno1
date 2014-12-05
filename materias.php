<?php
/**
 * Created by PhpStorm.
 * User: BerEduardo
 * Date: 25/09/14
 * Time: 06:43 PM
 */
include('Materia.php');
require_once('db.php');

echo $_GET['maestro'];
$cm=new Materia();
$cm->comboMateriaMaestro($_GET['maestro']);

?>