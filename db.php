<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'php';
        function conecx(){
            $conector = new mysqli('localhost', 'root', '', 'php');
              return $conector;
        }
        function getPlates($conector){
            $resultado = $conector->query("SELECT * FROM platos");
            return $resultado;
        }
        function getTipos($conector){
            $resultado = $conector->query("SELECT id,nombre FROM tipoPlato");
            return $resultado;
        }
        function getPlate($conector,$id){
            $resultadoObj = $conector->query("SELECT * FROM platos WHERE id=$id");
            if($resultadoObj ==false){
                header('Location: index.php?msg=noId');
            }
            $resultado=$resultadoObj->fetch_assoc();
            return $resultado;
        }
        /*
        Funcion que devuelve un mysqli_result con titulo de curso y nombre de especialidad
        Si existe error devuelve FALSE
        */
        // function getPlate_tipoPlate($conector){
        //     $resultado = $conector->query("SELECT plato.titulo, tipoPlato.nombre 
        //     FROM plato INNER JOIN 
        //     especialidad ON plato.id_TipoPlato = tipoPlato.id;");
        //     return $resultado;
        // }
        function newPlate($conector,$titulo,$descripcion){
            $consulta="INSERT INTO `Plato` (`id`, `titulo`, `numComensales`, `id_TipoPlato`) VALUES (NULL, '$titulo', '2020-05-22', '1')";
            $resultado = $conector->query($consulta);
        }
  
  ?>
