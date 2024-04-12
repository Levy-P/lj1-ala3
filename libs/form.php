<?php session_start()?>
<?php
$_SESSION['form'] = array(
    'invalid'=>array(),
    'body'=>''
);

$required = array('fname','lname','date');
foreach ($required as $input) {
    if (empty($_POST[$input])) {
        array_push($_SESSION['form']['invalid'],$input);
    }
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    array_push($_SESSION['form']['invalid'],'email');
}

if (!in_array('date',$_SESSION['form']['invalid'])) {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $currentDate = date('Y-m-d');
    $currentTime = date('H');

    if ($date >= $currentDate) {
        if ($date == $currentDate) {
            if ($currentTime <= $time) {
                array_push($_SESSION['form']['invalid'],'time');
            }
        }
    } else {
        array_push($_SESSION['form']['invalid'],'date');
    }

    if (!empty($_SESSION['form']['invalid'])) {
        header('Location: /booking.php');
    }
}

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$people = $_POST['people'];

$email_body = "
Dear $fname $mname $lname,
<br>
<br>Thank you for your booking reservation at Piazo's Pizza. Here are the details of your booking:
<br>
<br>Name: $fname $mname $lname
<br>Email address: $email
<br>Number of people: $people
<br>Date: $date
<br>Time: $time:00
<br>
<br>We will contact you as soon as possible for any additional information, if you have any questions, please contact us.
<br>
<br>Yours sincerely,
<br>Piazo's Pizza.
";

$_SESSION['form']['body'] = $email_body;

try { // Zorg ervoor dat je de juiste SMTP configuratie hebt gemaakt om mail() te laten werken!
    mail($email, 'Bookingsbevestiging', $email_body);
} catch(Exception $e) {}

header('Location: /reservation.php');
?>