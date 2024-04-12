<?php
echo "
<header flex>
    <script src=\"libs/dropdown.js\" type=\"text/javascript\" defer></script>
    <img src=\"assets/icons/hamburger.png\" alt=\"Dropdown Menu\" class=\"dropdown\" onclick=\"toggleNav();\">
    <article flex id=\"nav\">
        <a href=\"index.php\"   flex><p>Home</p></a>
        <p>•</p>
        <a href=\"ourmenu.php\" flex><p>Our Menu</p></a>
        <p>•</p>
        <a href=\"booking.php\" flex><p>Booking</p></a>
        <p>•</p>
        <a href=\"gallery.php\" flex><p>Gallery</p></a>
        <p>•</p>
        <a href=\"aboutus.php\" flex><p>About Us</p></a>
    </article>
    <figure id=\"logo\"></figure>
</header>
";
?>