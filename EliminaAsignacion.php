<?php
/**
 * Created by PhpStorm.
 * User: BerEduardo
 * Date: 2/10/14
 * Time: 02:29 PM
 */
require_once('db.php');
include('Grupo.php');
$id=$_GET['id'];
$group=$_GET['Grupos'];
$query="delete
from detalleGrupo
where id=$id and id_grupo=$group  ";
mysql_query($query) or die(mysql_error());
$grp=new Grupo();
$grp->reporteG2($_GET['Grupos']);
?>