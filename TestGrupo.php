<?php
/**
 * Created by PhpStorm.
 * User: BerEduardo
 * Date: 19/09/14
 * Time: 06:48 PM
 */
require_once('header.php');
require_once('db.php');
include('Grupo.php');
$grp= new Grupo();
$grp->actualizarGrupo();
$grp->altaGrupo();
$grp->eliminarGrupo();
$grp->reporteG1();
$grp->reporteG2();
$grp->aignarMaterias();
$grp->asignarGrupo();



require_once('footer.php');
?>