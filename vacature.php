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
<body id="vacature">
    <?php include 'libs/components/header.php' ?>
<main>
<figure>
        <img src="assets/dishes/pizza.png">
    </figure>
    <div id="vacature" class="container">
        <?php
        $vacatures = array(
            array(
                'functie' => 'Serveerster/ ober',
                'omschrijving' => 'Wij zijn op zoek naar een vriendelijke serveerster/ ober om ons team te komen versterken. Wij bieden een leuke werkomgeving, flexibele werktijden en een marktconform salaris.',
                'sollicitatie_link' => 'solliciteer.php?functie=serveerster_obers'
            ),
            array(
                'functie' => 'Kok',
                'omschrijving' => 'Wij zijn op zoek naar een ervaren kok die onze keuken kan versterken. Wij bieden een dynamische werkomgeving en de mogelijkheid om te werken met verse ingrediënten.',
                'sollicitatie_link' => 'solliciteer.php?functie=kok'
            ),
            array(
                'functie' => 'Barman/ barvrouw',
                'omschrijving' => 'Wij zijn op zoek naar een enthousiaste barman/ barvrouw om ons team te komen versterken. Wij bieden een gezellige werkomgeving en flexibele werktijden.',
                'sollicitatie_link' => 'solliciteer.php?functie=barman_barvrouw'
            ),
            array(
                'functie' => 'Pizzabakker',
                'omschrijving' => 'Als Pizzabakker ben je verantwoordelijk voor het bereiden van onze heerlijke en authentieke pizzas, die de harten van onze klanten veroveren. Je zult werken in een professionele keukenomgeving en samenwerken met een team van toegewijde collegas om een onvergetelijke culinaire ervaring te bieden.',
                'sollicitatie_link' => 'solliciteer.php?functie=leverancier'
            ),
            array(
                'functie' => 'Sous chef',
                'omschrijving' => 'Als Sous Chef ben je een essentieel onderdeel van ons keukenteam en werk je nauw samen met onze Head Chef om onze culinaire visie tot leven te brengen. Je bent verantwoordelijk voor het coördineren van de dagelijkse keukenactiviteiten, het beheren van de keukenbrigade en het handhaven van de hoogste kwaliteitsnormen.',
                'sollicitatie_link' => 'solliciteer.php?functie=barman_barvrouw'
            ),
            array(
                'functie' => 'Head chef',
                'omschrijving' => 'Als Head Chef ben je de architect van onze menus en de leider van ons keukenteam. Je bent verantwoordelijk voor het ontwikkelen van innovatieve gerechten, het beheren van de keukenoperaties en het inspireren van ons team om elke dag te streven naar culinaire perfectie.',
                'sollicitatie_link' => 'solliciteer.php?functie=barman_barvrouw'
            ),
            array(
                'functie' => 'Patissier',
                'omschrijving' => 'Als Pastry Chef ben je verantwoordelijk voor het ontwerpen, bereiden en presenteren van onze heerlijke selectie aan desserts, gebak en zoete lekkernijen. Je werkt nauw samen met ons keukenteam om onze culinaire visie tot leven te brengen en onze gasten een onvergetelijke smaakervaring te bieden.',
                'sollicitatie_link' => 'solliciteer.php?functie=barman_barvrouw'
            ),
            array(
                'functie' => 'Menu-ontwikkelaar',
                'omschrijving' => 'Als Menu Ontwikkelaar ben je verantwoordelijk voor het creëren van innovatieve en uitnodigende menus die onze gasten keer op keer weten te verrassen en te verleiden. Je werkt nauw samen met ons culinaire team om onze visie op het gebied van gastronomie tot leven te brengen en onze menus naar een hoger niveau te tillen.',
                'sollicitatie_link' => 'solliciteer.php?functie=barman_barvrouw'
            ),
            array(
                'functie' => 'Hulpchef',
                'omschrijving' => 'Als Hulpchef werk je nauw samen met onze keukenbrigade om ervoor te zorgen dat onze gasten worden verwend met heerlijke gerechten van hoge kwaliteit. Je ondersteunt de Head Chef en Sous Chef bij de dagelijkse operationele taken in de keuken en draagt bij aan een vlotte werking van het keukenteam.',
                'sollicitatie_link' => 'solliciteer.php?functie=barman_barvrouw'
            ),
        );

        foreach ($vacatures as $vacature) {
            echo '<div class="vacature grow">';
            echo '<h2>' . $vacature['functie'] . '</h2>';
            echo '<p>' . $vacature['omschrijving'] . '</p>';
            echo '<button class="button" onclick="window.location.href=\'' . $vacature['sollicitatie_link'] . '\'"><span>Solliciteer</span></button>';
            echo '</div>';
        }
        ?>
    </div>
</main>
    <?php include 'libs/components/footer.php' ?>

</body>
</html>
