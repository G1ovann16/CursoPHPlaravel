<?php
    // include_once "./var.php";
    require_once "./db.php";
    $carta=getPlates(conecx());
    var_dump($carta);
?>

<!DOCTYPE html>
<html lang="en">
    <?php
        include_once 'header.php';
    ?>
    <?php
        include_once 'navbar.php';
    ?>
    <?php
        include_once 'main.php';
    ?>
    <?php
        include_once 'footer.php';
    ?>
</html>