<div class="container">
<a href="newPlate.php" class="waves-effect waves-light btn">Add Plate</a>
    <div class="column is-one-third">
            <?php
                foreach ($carta as $plato) {
                // foreach ($plato as $itemplato => $item){
            //     if($itemplato==="ingredientes"){
            //     foreach($item as $ingrediente){
            //  }
            ?>
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="<?php echo $plato["imagen"];?>" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                    <a href="details.php?id=<?=$plato["id"]?>">Learn more ...</a>
                    </div>
                    <div class="media-content">
                        <p class="title is-4"> 
                        <?php echo  $plato["titulo"];  ?>
                        </p>
                        <p class="subtitle is-6"> 
                        <?php echo $plato["numComensales"];  ?>
                        Comensales
                        </p>
                    </div>
                </div>
                <div class="content">
                <p>
                </p> 
                    <br>
                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
            </div>
            <?php
    //     }
    // }
} 
 ?>
        </div>
    </div>
</div>