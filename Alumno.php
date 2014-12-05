<?php
class Alumno{
    private $id;
    private $nombre;
    private $app;
    private $apm;
    private $telefono;
    private $calle;
    private $numext;
    private $numint;
    private $colonia;
    private $municipio;
    private $estado;
    private $cp;
    private $correo;
    private $pass;
    private $nivel;
    private $estatus;
    private $grupo;

    public function reporecombAlumno(){
        $sql="SELECT * FROM  grupo where status='1' order by grupo asc ";
        $consulta=mysql_query($sql) or die(mysql_error());



        $sql1=" SELECT * FROM usuario WHERE nivel=3   AND id NOT IN(
                  SELECT id FROM detalleGrupo)";
        $consulta1=mysql_query($sql1) or die(mysql_error());
        $numero=mysql_num_rows($consulta1);
        echo"<div class=table-responsive>";
        echo"<form name='Asigna' method='post' action='MuestraMateria.php'>";
        echo"<input type='hidden' name='numero' value='$numero'>";
        echo"<table class=\"table table-striped\">";
        echo"<tr><td colspan=3 align=Center><strong>Alumnos Sin Asignar</strong> </td><td>Grupo</td><td>";
              echo"<select name='Grupos' id='Grupos'>";
        while($field=mysql_fetch_array($consulta)){
            $this->id=$field['id_grupo'];
            $this->nombre=$field['grupo'];


            echo"<option value='".$this->id."'>".$this->nombre."</option>";

        }
        echo"</select>";
        echo"
        </td></tr>";
        echo"<tr><th>Clave</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Selecciona</th></tr>";
        $au=0;
        while($field=mysql_fetch_array($consulta1)){
            $this->id=$field['id'];
            $this->nombre=$field['nombre'];
            $this->app=$field['apellido_pat'];
            $this->apm=$field['apellido_mat'];
            $this->nivel=$field['nivel'];
            $ch="al".$au;
            switch($this->nivel){
                case 1:
                    $nivel="Administrador";
                    break;
                case 2:
                    $nivel="Maestro";
                    break;
                case 3:
                    $nivel="Alumno";
                    break;

            }

            echo"<tr><td>$this->id</td><td>$this->nombre</td><td>$this->app</td><td>$this->apm</td><td><input type='checkbox' name='nose[$au]' ";echo"value='".$this->id."'></td></tr>";
            $au=$au+1;

        }
        echo"</table>
        <input type='submit' class='btn btn-lg btn-info' value='enviar'>
       ";
echo"</form> </div>";

    }

}
?>