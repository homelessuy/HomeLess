<?php
//session_start(); 
include_once "conexion.php";
if(isset($_POST['enviar'])) 
{  
        $sql = 'SELECT * FROM usuarios'; 
        $rec = mysql_query($sql); 
        $verificar_usuario = 0; 
  
        while($result = mysql_fetch_object($rec)) 
        { 
            if($result->usuario == $_POST['usuario']) 
            { 
                $verificar_usuario = 1; 
            } 
        } 
  
        if($verificar_usuario == 0) 
        { 
            if($_POST['password'] == $_POST['repassword']) 
            { 
                $usuario = $_POST['usuario']; 
                $password = $_POST['password'];
                $mail = $_POST['mail']; 
                $sql = "INSERT INTO usuarios (nombre,mail,password) VALUES ('$usuario','$mail','$password')";
                mysql_query($sql); 
                
                header("Location: ../index.php");
                //echo 'Usted se ha registrado correctamente.'; 
            } 
            else 
            { 
                $usuario = ''; 
                $password = '';
                $mail = '';
                echo 'Las claves no son iguales, intente nuevamente.'; 
            } 
        } 
        else 
        { 
                $usuario = ''; 
                $password = '';
                $mail = '';
            echo 'Este usuario ya ha sido registrado anteriormente.'; 
        } 
    } 
?> 