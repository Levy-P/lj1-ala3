<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery - Piazo's Pizza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    
    <meta name="description" content="Website for Piazo's Pizza">
    <meta name="author" content="Maryam Aldainy">
    <meta name="keywords" content="Piazo's Pizza, Pizza, Italian Food, Italian Kitchen, Yummy, Restaurant">

    <?php include 'libs/components/style.php' ?>

    <!--voor <script> tags-->
</head>

<body id="gallery">
<?php include 'libs/components/header.php' ?>
    <main>
        <section grid>
            <?php
            $images = "assets/dishes/pizza.png";
            for ($i = 1; $i < 10; $i++) {
                echo "
                <article class=\"blok\" flex>
                    <img src=\"$images\" alt=\"placeholder pizza $i\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla augue, suscipit ut magna nec, dictum aliquet est. Integer sed.</p>
                </article>
                ";
            }
            ?>
        </section>
    </main>
<?php include 'libs/components/footer.php' ?>
</body>
</html>
<!---->