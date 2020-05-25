<?php
    require_once "./db.php";
    $cursos=getTipos(conecx());
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <title>New Menu</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <form class="col s12" method="post" action="insertarCurso.php">
        <div class="row">
            <div class="input-field col s12">
            <input placeholder="Plate" id="titulo" name="titulo" type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <input placeholder="Ingredients" id="descripcion" name="descripcion" type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select>
                
                <option value="" disabled selected>Choose</option>
                <option value="1">First</option>
                <option value="2">Main Course</option>
                <option value="3">Dessert</option>
                </select>
                <label>Materialize Select</label>
            </div>
        </div>
        <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
            </button>
        </div>
        </form>
    </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>     
</body>
</html>