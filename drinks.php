<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vacatures - Piazo's Pizza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    
    <meta name="description" content="Website for Piazo's Pizza">
    <meta name="author" content="Maryam Aldainy">
    <meta name="keywords" content="Piazo's Pizza, Pizza, Italian Food, Italian Kitchen, Yummy, Restaurant">

    <?php include 'libs/components/style.php' ?>

</head>
<body id="drinks"> 
    <?php include 'libs/components/header.php' ?>
<main>
<section class="drinks" id="drinks">
    <h1>DRINKS</h1>
    <div class="drink-container" flex>
        <?php 
        for ($i = 1; $i <= 8; $i++) { 
            echo '
            <div class="drink">
                <img src="assets/dishes/sprite.png">
                <h2>Drink Name</h2>
                <p>Description of the drink.</p>
                <p>€2,99</p>
            </div>'
            ;
        }
        ?>
    </div>
</section>
</main>
    <?php include 'libs/components/footer.php' ?>

</body>
</html>
