<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Menu - Piazo's Pizza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    
    <meta name="description" content="Website for Piazo's Pizza">
    <meta name="author" content="Levy Pondman">
    <meta name="keywords" content="Piazo's Pizza, Pizza, Italian Food, Italian Kitchen, Yummy, Restaurant">

    <?php include 'libs/components/style.php' ?>

    <script src="libs/ourmenu.js" type="text/javascript" defer></script>
</head>

<body id="ourmenu">
<?php include 'libs/components/header.php' ?>
    <main>
        <section>
            <section grid class="container">
                <article flex id="tabs">
                    <div class="button" onclick="switchTab('featured', this);" tab="featured"><p noSelect>FEATURED</p></div>
                    <div class="button" onclick="switchTab('pizzas', this);" tab="pizzas"><p noSelect>PIZZA'S</p></div>
                    <div class="button" onclick="switchTab('appetizers', this);" tab="appetizers"><p noSelect>APPETIZERS</p></div>
                    <div class="button" onclick="switchTab('desserts', this);" tab="desserts"><p noSelect>DESSERTS</p></div>
                    <div class="button" onclick="switchTab('drinks', this);" tab="drinks"><p noSelect>DRINKS</p></div>
                    <div class="button" onclick="switchTab('all', this);" tab="all"><p noSelect>ALL</p></div>
                </article>
                <span flex noSelect id="filter-span">
                    <img src="assets/icons/filter.png" alt="Filter icon">
                    <p>Filters</p>
                </span>
                <article flex id="filters">
                    <span flex noSelect>
                        <img src="assets/icons/filter.png" alt="Filter icon">
                        <p>Filters</p>
                    </span>
                    <div class="button" onclick="switchFilter('kids', this)"><p noSelect>KIDS</p></div>
                    <div class="button" onclick="switchFilter('vegatarian', this)"><p noSelect>VEGATARIAN</p></div>
                    <div class="button" onclick="switchFilter('vegan', this)"><p noSelect>VEGAN</p></div>
                </article>
            </section>
        </section>

        <?php
        function gerecht($aantal) {
            for ($i=0; $i < $aantal; $i++) { 
                echo "
                <article class=\"gerecht\">
                    <h1>LOREM IMPSUM DOLOR SIT</h1>
                    <span flex>
                        <p>Lorem ipsum dolor sit amet consectetur. Iaculis bibendum mi ut lectus in tempus eget. Quam tincidunt malesuada sed tellus nulla at.</p>
                        <img src=\"assets/dishes/pizza.png\" alt=\"Dummy Gerecht\">
                    </span>
                </article>
                ";
            }
        }
        ?>

        <section tab="featured">
            <h1>FEATURED</h1>
            <span class="categorie" flex>
                <img src="assets/icons/star.png" alt="Star">
                <h2>Popular Dishes</h2>
            </span>
            <section flex class="b blok">
                <?php gerecht(3)?>
            </section>
            <section flex>
                <section flex>
                    <span class="categorie" flex>
                        <img src="assets/icons/leaf.png" alt="Star">
                        <h2>Vegan Dishes</h2>
                    </span>
                    <section class="c blok" flex>
                        <?php gerecht(2)?>
                    </section>
                </section>
                <section flex>
                    <span class="categorie" flex>
                        <img src="assets/icons/dessert.png" alt="Star">
                        <h2>Desserts</h2>
                    </span>
                        <section class="a blok" flex>
                        <?php gerecht(2)?>
                    </section>
                </section>
            </section>
        </section>

        <section tab="pizzas" hidden>
            <h1>PIZZA'S</h1>
            <section flex class="b blok">
                <?php gerecht(3)?>
            </section>
            <section flex class="b blok">
                <?php gerecht(3)?>
            </section>
        </section>

        <section tab="appetizers" hidden>
            <h1>APPETIZERS</h1>
            <section flex class="c blok">
                <?php gerecht(3)?>
            </section>
            <section flex class="c blok">
                <?php gerecht(3)?>
            </section>
        </section>

        <section tab="desserts" hidden>
            <h1>DESSERTS</h1>
            <section flex class="a blok">
                <?php gerecht(3)?>
            </section>
            <section flex class="a blok">
                <?php gerecht(3)?>
            </section>
        </section>

        <section tab="drinks" hidden>
            <h1>DRINKS</h1>
            <section flex class="c blok">
                <?php gerecht(3)?>
            </section>
            <section flex class="c blok">
                <?php gerecht(3)?>
            </section>
            <a href="drinks.php">
            <button class="button"><span>Meer drank opties..</span>
            </a>
        </section>

        <section tab="all" hidden>
            <h1>ALL</h1>
            <h2>Pizza's</h2>
            <section flex class="b blok">
                <?php gerecht(3)?>
            </section>
            <section flex class="b blok">
                <?php gerecht(2);
                    echo "
                    <article class=\"gerecht c\">
                        <h1>LOREM IMPSUM DOLOR SIT</h1>
                        <span flex>
                            <p>Lorem ipsum dolor sit amet consectetur. Iaculis bibendum mi ut lectus in tempus eget. Quam tincidunt malesuada sed tellus nulla at.</p>
                            <img src=\"assets/dishes/pizza.png\" alt=\"Dummy Gerecht\">
                        </span>
                    </article>
                        ";
                ?>
            </section>
            <h2>Drinks</h2>
            <section flex class="a blok">
                <?php gerecht(3)?>
            </section>
            <h2>Appetizers</h2>
            <section flex class="c blok">
                <?php gerecht(3)?>
            </section>
            <section flex class="c blok">
                <?php gerecht(3)?>
            </section>
            <h2>Desserts</h2>
            <section flex class="a blok">
            <?php gerecht(2);
                    echo "
                    <article class=\"gerecht c\">
                        <h1>LOREM IMPSUM DOLOR SIT</h1>
                        <span flex>
                            <p>Lorem ipsum dolor sit amet consectetur. Iaculis bibendum mi ut lectus in tempus eget. Quam tincidunt malesuada sed tellus nulla at.</p>
                            <img src=\"assets/dishes/pizza.png\" alt=\"Dummy Gerecht\">
                        </span>
                    </article>
                        ";
                ?>
            </section>
            <h2>Pizza's</h2>
            <section flex class="b blok">
                <?php gerecht(1);
                    echo "
                    <article class=\"gerecht c\">
                        <h1>LOREM IMPSUM DOLOR SIT</h1>
                        <span flex>
                            <p>Lorem ipsum dolor sit amet consectetur. Iaculis bibendum mi ut lectus in tempus eget. Quam tincidunt malesuada sed tellus nulla at.</p>
                            <img src=\"assets/dishes/pizza.png\" alt=\"Dummy Gerecht\">
                        </span>
                    </article>
                        ";
                      gerecht(1);
                ?>
            </section>
            <section flex class="b blok">
                <?php
                    echo "
                    <article class=\"gerecht c\">
                        <h1>LOREM IMPSUM DOLOR SIT</h1>
                        <span flex>
                            <p>Lorem ipsum dolor sit amet consectetur. Iaculis bibendum mi ut lectus in tempus eget. Quam tincidunt malesuada sed tellus nulla at.</p>
                            <img src=\"assets/dishes/pizza.png\" alt=\"Dummy Gerecht\">
                        </span>
                    </article>
                        ";
                    gerecht(2);
                ?>
            </section>
        </section>
    </main>
<?php include 'libs/components/footer.php' ?>
</body>
</html>