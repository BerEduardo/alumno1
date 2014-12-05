    <?php
    /**
     * Created by PhpStorm.
     * User: MAQ8-LAB2-TIC
     * Date: 12/09/14
     * Time: 06:24 PM
     */


    require("header.php");

    include("db.php");
    require('Maestro.php');
    require('Materia.php');

    $ma=new Maestro();
    $mat=new Materia();
    $mat->muestraMaterias($idu);



    echo"</table></div>";
    echo"<div id='divtabla'></div>";
    include("footer.php");

    ?>
