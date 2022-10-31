<?php
include("conexion.php");
// ============REGISTRO DE USUARIO=============
if(isset($_POST["userRegis"])){
    if(!empty($_POST["userRegis"]) && !empty($_POST["correoRegis"]) && !empty($_POST["correoConfiRegis"]) && !empty($_POST["claveRegis"]) && !empty($_POST["claveConfiRegis"])){
        if($_POST["correoRegis"] != $_POST["correoConfiRegis"]){
            echo  "<script>confirmarCorreo()</script>";
        }else{
            if($_POST["claveRegis"] != $_POST["claveConfiRegis"]){
                echo  "<script>confirmarClave()</script>";
            }else{
                $usuario = $_POST["userRegis"];
                $correo = $_POST["correoRegis"];
                $clave = md5($_POST["claveRegis"]);
                $insertar = "INSERT INTO `usuarios`(`id_user`, `nombreUser`, `correo`, `clave`, `rango`, `baneo`, `actividad`) VALUES (NULL,'$usuario','$correo','$clave',4,1,1)";
                $ejecutar = mysqli_query($conexion,$insertar);
                header("Refresh: 2;login.php");
                echo "<script>exito()</script>";
            }
        }
    }else{
        
        echo "<script>validarCampos()</script>";
    }
}
//=========VALIDAR LOGIN============
if(isset($_POST["userLogin"])){
    session_start();
    if(empty($_POST["userLogin"]) && empty($_POST["claveLogin"])){
        echo "<script>validarCampos()</script>";
    }else{
        $usuario = $_POST["userLogin"];
        $clave = md5($_POST["claveLogin"]);
         $consultaEmpresa = "SELECT * FROM `empresa` WHERE  nombre='$usuario' and clave = '$clave'";
            $ejecutarEmpre = mysqli_query($conexion,$consultaEmpresa);
            $filaEmpre = mysqli_num_rows($ejecutarEmpre);
            //login de empleado, gerente y admin
            if($filaEmpre > 0){
                $filaEmpre = mysqli_fetch_array($ejecutarEmpre);
                if($filaEmpre["rango"] == 1){
                        $_SESSION["admin"] = $usuario;
                            header("Refresh: 2;modulos/admin.php");
                            echo  "<script>exito()</script>";
            }else if($filaEmpre["rango"] == 2){
                     if($filaEmpre["baneo"] == 1){
                        $_SESSION["gerente"] = $usuario;
                            header("Refresh: 2;modulos/gerente.php");
                            echo  "<script>exito()</script>";
                     }else{
                        echo "<script>baneo()</script>";
                     }//fin de validacion gerente baneado
            }else if($filaEmpre["rango"] == 3){
                if($filaEmpre["actividad"] == 2){
                    $_SESSION["empleado"] = $usuario;
                header("Refresh: 2;modulos/empleado.php");
                echo  "<script>exito()</script>";
                }else{
                    echo "<script>bloqueo()</script>";
                }
                
            }//fin de validacion gerente baneado
            }else{
        $consultaUser = "SELECT * FROM `usuarios` WHERE  nombreUser='$usuario' and clave = '$clave'";
        $ejecutar = mysqli_query($conexion,$consultaUser);
        $fila = mysqli_num_rows($ejecutar);
        //login de usuario
        if($fila > 0){
            $fila = mysqli_fetch_array($ejecutar);
            if($fila["rango"] == 4){
                $_SESSION["usuario"] = $usuario;
                header("Refresh: 2;modulos/usuario.php");
                 echo  "<script>exito()</script>";
            }
        }else{
            $consultaUserCorreo = "SELECT * FROM `usuarios` WHERE  correo='$usuario' and clave = '$clave'";
            $ejecutar = mysqli_query($conexion,$consultaUserCorreo);
            $fila = mysqli_num_rows($ejecutar);
            if($fila > 0){
                $fila = mysqli_fetch_array($ejecutar);
                if($fila["rango"] == 4){
                    $_SESSION["usuario"] = $usuario;
                    header("Refresh: 2;modulos/usuario.php");
                     echo  "<script>exito()</script>";
                }
            }else{
                echo "<script>validarLogin()</script>";
            }
        }//fin de validacion de usuario
               
        }
        
    }//fin de la validacion empleado, admin y gerente
}//fin de la validacion


?>