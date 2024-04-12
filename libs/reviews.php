<?php
$reviews = array();

try {
    $mySQLusername = 'root';
    $mySQLpassword = '';

    $conn = new PDO("mysql:host=localhost;dbname=main", $mySQLusername, $mySQLpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM reviews LIMIT 99;");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $reviews =  json_encode($result); // Conversie van array() naar stdObject()
} catch(PDOException $e) {
    $reviews = file_get_contents(__DIR__."/../info/reviews.json"); // Fallback voor SQL database
}

$reviews = json_decode($reviews);
shuffle($reviews);

function makeReview($review) {
    $name = $review->name;
    $rating = $review->rating;
    $header = $review->header;
    $comment = $review->comment;

    $animationDelay = rand(0,75);

    echo "
    <article class=\"review\" style=\"animation-delay: 0.{$animationDelay}s\" flex>
        <h2>$name</h2>
        <span class=\"stars\" noSelect flex>";
    for($i = 1; $i < 6; $i++) {
        $star = $rating>=$i?'star':'noStar';
        echo "<img src=\"assets/icons/$star.png\">";
    }
    echo "
        </span>
        <article>
            <h1>$header</h1>
            <p>$comment</p>
        </article>
    </article>
    ";
}