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

    <script src="libs/functions.js" type="text/javascript"></script>
    <script src="libs/slideshow.js" type="text/javascript" defer></script>
</head>

<body id="home">
<?php include 'libs/components/header.php' ?>
    <main>
        <section grid id="slideshow">
            <article flex>
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <span class="loading"><figure></figure></span>
            </article>
            <img src="assets/dishes/pizza.png">
            <article flex id="slides">
                <?php
                for ($i = 0; $i < 3; $i++) {
                    echo "<img src=\"assets/dishes/pizza.png\" alt=\"Slide $i\" onclick=\"toSlide($i);\">";
                }
                ?>
            </article>
        </section>
        <section flex class="container">
            <article class="b">
                <img src="assets/dishes/pizza.png" alt="Dummy pizza">
            </article>
            <article class="c">
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Iaculis bibendum mi ut lectus in tempus eget. Quam tincidunt malesuada sed tellus nulla at.</p>
            </article>
        </section>
        <section flex class="container">
            <article class="c">
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Iaculis bibendum mi ut lectus in tempus eget. Quam tincidunt malesuada sed tellus nulla at.</p>
            </article>
            <article class="b">
                <h1>Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Iaculis bibendum mi ut lectus in tempus eget. Quam tincidunt malesuada sed tellus nulla at.</p>
            </article>
        </section>
    </main>
<?php include 'libs/components/footer.php' ?>
</body>
</html>
<!---->