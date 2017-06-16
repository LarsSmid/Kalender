<?php
 $waardeMaand = null;
 $waardeDag = null;
?>
<header>
    <h1 id="title">kalender</h1>
</header>
	<main>
   		<?php foreach ($mensen as $mens) { ?>
         <?php if ($mens['month_name'] != $waardeMaand ): 
         $waardeDag = null;?>

         	<h1 id="maanden">	<?= $mens['month_name']; ?> </h1>

         <?php endif ?>
		<?php
			$waardeMaand = $mens['month_name']
		?>


		<?php if ($mens['day'] != $waardeDag ): ?>

         	<h2 id="dagen">		<?= $mens['day']; ?></h2> 

         <?php endif ?>
        <?php
        $waardeDag = $mens['day']
        ?>

        <a href="<?= URL ?>verjaardag/edit/<?= $mens['id'] ?>"><p id="namen"> <?= $mens['person']; ?> 
        (<?= $mens['year']; ?>) </a>
        <a  href="<?= URL ?>verjaardag/delete/<?= $mens['id'] ?>" onclick="return confirm('Wil je <?= $mens['person']; ?> verwijderen?')"> x</a> </p>

    	<?php } ?>

        

<p><a href="<?= URL ?>verjaardag/create/<?= $mens['id'] ?>">+ Toevoegen</a></p>
</main>