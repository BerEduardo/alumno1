<?php
/**
 * Created by PhpStorm.
 * User: BerEduardo
 * Date: 2/10/14
 * Time: 01:41 PM
 */
require_once('db.php');
include('Grupo.php');
$grp=new Grupo();
$grp->reporteG2($_GET['Grupos']);
?>