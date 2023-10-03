<!-- poceso del formularion -->
<?php
    $usuario= $_POST["login"];
    $clave=$_POST["clave"];

    if($usuario!=null && $clave!=null){
        if($usuario=='admin' && $clave=='1234'){
            echo "<p>Datos ingresados correctos</p>";
        } else{
            echo "<p>Datos ingresados incorrectos</p>";
        }
    }else {
        echo"<p>No ingresaste nada</p>";
    }
?>