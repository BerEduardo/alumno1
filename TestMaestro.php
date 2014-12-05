<?php
/**
 * Created by PhpStorm.
 * User: MAQ8-LAB2-TIC
 * Date: 12/09/14
 * Time: 06:24 PM
 */
require("header.php");

require_once("db.php");
require('Maestro.php');

$ma=new Maestro();
$ma->reporecomb();

require("footer.php");
?>