<h3><?php echo $title; ?></h3>
<div>
  <p>Temps de préparation : <?php echo $cookingTime; ?> minutes</p>
</div>
<div>
  <p>difficulté<?php 
    for ($starNumber = 0; $starNumber < $difficulty; $starNumber++) {
        echo ' *';
      } ?></p>
</div>