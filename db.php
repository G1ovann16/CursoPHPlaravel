<?php
        $conector = new mysqli("localhost", "root", "", "php");
        if ($conector->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $conector->connect_errno . ") " . $conector->connect_error;
        }else{
            $resultado = $conector->query("SELECT * FROM php");
            if(!$resultado){
                echo "error";
            }else{
                foreach($resultado as $fila){
                    echo "<h1>titulo: ".$fila["titulo"]."</h1>";
                }
            }
        }
    ?>