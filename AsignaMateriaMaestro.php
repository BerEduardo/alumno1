<?php
/**
 * Created by PhpStorm.
 * User: BerEduardo
 * Date: 26/09/14
 * Time: 01:27 PM
 */
require_once('Materia.php');
require('db.php');
$mat=new Materia();
$mat->asignarMateriaMaestro($_GET['idm'],$_GET['idp']);
$mat->muestraMaterias($_GET['idp']);

?>