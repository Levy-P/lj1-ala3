<!DOCTYPE html>
<html lang="en">
<head>
    <title>Piazo's Pizza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    
    <meta name="description" content="Website for Piazo's Pizza">
    <meta name="author" content="Levy Pondman">
    <meta name="keywords" content="Piazo's Pizza, Pizza, Italian Food, Italian Kitchen, Yummy, Restaurant">

    <?php include 'libs/components/style.php' ?>
    <?php include 'libs/reviews.php' ?>
</head>

<body id="reviews">
<?php include 'libs/components/header.php' ?>
    <main>
        <p><?php print_r($reviews);?></p>
        <h1>Read Piazo's Pizza's Reviews</h1>
        <section flex class="container">
            <?php
            $reviewsAmount = count($reviews);
            $third = $reviewsAmount/3;
            
            $rows = array();
            $rows[0] = ceil($third);
            $rows[1] = round($third);
            $rows[2] = floor($third);

            $i = 0;
            for ($j = 0; $j < 3; $j++) {
                echo '<section flex>';

                $length = $i + $rows[$j];
                for (;$i < $length; $i++) {
                    makeReview($reviews[$i]);
                }
                
                echo '</section>';
            }
            ?>
        </section>
    </main>
<?php include 'libs/components/footer.php' ?>
</body>
</html>