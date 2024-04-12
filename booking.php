<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking - Piazo's Pizza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
    
    <meta name="description" content="Website for Piazo's Pizza">
    <meta name="author" content="Levy Pondman">
    <meta name="keywords" content="Piazo's Pizza, Pizza, Italian Food, Italian Kitchen, Yummy, Restaurant">

    <?php include 'libs/components/style.php' ?>

    <script src="libs/form.js" type="text/javascript" defer></script>
</head>

<body id="booking">
<?php include 'libs/components/header.php' ?>
<main grid>
    <figure>
        <img bg src="assets/dishes/pizza.png">
    </figure>
    <?php
        if (!empty($_SESSION['form']['invalid'])) {
            $i = 0;
            $inputInvalid = $_SESSION['form']['invalid'];
            $_SESSION['form'] = array(
                'invalid'=>array(),
                'body'=>''
            );
            $inputNames = array(
                'fname'=>'First Name',
                'lname'=>'Last Name',
                'email'=>'Email Adres',
                'date'=>'Date',
                'time'=>'Time'
            );
        

            echo "<article class=\"popup\" flex><span grid><p>Reservation failed, The following information is missing or invalid:</p><p><i>";
            foreach ($inputInvalid as $input) {
                if (in_array($input, $inputInvalid)) {
                    if ($i!=0) {echo ", ";};
                    echo "<b>$inputNames[$input]</b>";
                }
                $i++;
            }
            echo "</i></p></span><p noSelect onclick=".'this.parentElement.remove();'.">x</p></article>";
        }
    ?>
    <span flex id="loading" hidden>
            <h1>Processing information...</h1>
            <img src="assets/icons/sync.png">
    </span>
    <form method="POST" action="libs/form.php" autocomplete="on" id="form" grid>
        <h1>Personal Information</h1>
        <section class="a" grid>
            <section grid>
                <article>
                    <h1>First Name</h1>
                    <input type="text" name="fname">
                </article>
                <article>
                    <span grid>
                        <h1>Middle Name</h1>
                        <p>(Optional)</p>
                    </span>
                    <input type="text" name="mname">
                </article>
                <article>
                    <h1>Last Name</h1>
                    <input type="text" name="lname">
                </article>
            </section>
            <section grid>
                <article>
                    <h1>Email Adress</h1>
                    <input type="text" name="email" placeholder="loremipsum@dolor.sit">
                </article>
                <article>
                    <span grid>
                        <h1>Phone Number</h1>
                        <p>(Optional)</p>
                    </span>
                    <input type="text" name="phone" placeholder="+1 (23) 12345678">
                </article>
            </section>
        </section>
        <h1>Booking Information</h1>
        <section class="b">
            <section grid>
                <article grid>
                    <h1>Date</h1>
                    <input type="date" name="date">
                </article>
                <article grid>
                    <h1>Time</h1>
                    <select name="time">
                        <?php
                        for ($i=12;$i<23;$i++) {echo "<option value=\"$i\">$i:00</option>";}
                        ?>
                    </select>
                </article>
                <article grid>
                    <h1>Number of people</h1>
                    <select name="people">
                        <?php
                        for ($i=1;$i<21;$i++) {echo "<option value=\"$i\">$i</option>";}
                        ?>
                    </select>
                </article>
            </section>
        </section>
        <article id="submit" onclick="submit();">
            <h1 noSelect>BOOK RESERVATION</h1>
        </article>
        <article>
        <p><i>Piazo's Pizza protects your information according to the <a href="privacy.php">GDPR law</a></i>.</p>
        </article>
    </form>
</main>
<?php include 'libs/components/footer.php' ?>
</body>
</html>
<!---->