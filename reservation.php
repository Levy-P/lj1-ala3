<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking - Piazo's Pizza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    
    <meta name="description" content="Website for Piazo's Pizza">
    <meta name="author" content="Maryam Aldainy">
    <meta name="keywords" content="Piazo's Pizza, Pizza, Italian Food, Italian Kitchen, Yummy, Restaurant">

    <?php include 'libs/components/style.php' ?>
</head>


<body id="reservation">
<?php include 'libs/components/header.php' ?>
<main>
    <figure>
        <img src="assets/dishes/pizza.png">
    </figure>
    <section>
        <h1>Thanks for making your reservation at Piazo's Pizza.</h1>
        <p>You have recieved an email containing the following information:</p>
        <article id="mail">
            <p><?php
            echo $_SESSION['form']['body'];
            ?></p>
        </article>
    </section>
</main>

<?php include 'libs/components/footer.php' ?>
</body>