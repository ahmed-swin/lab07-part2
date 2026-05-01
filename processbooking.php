<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<h1>Rohirrim Tour Booking Confirmation</h1>

<?php
if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    echo "<p>Welcome $firstname $lastname !</p>";
}

if (isset($_POST['4day'])) {
    $trip = $_POST['4day'];
    echo "<p>You are now booked on the $trip</p>";
}

if (isset($_POST['species'])) {
    $species = $_POST['species'];
    echo "<p>Species: $species</p>";
}

if (isset($_POST['age'])) {
    $age = $_POST['age'];
    echo "<p>Age: $age</p>";
}

if (isset($_POST['food'])) {
    $food = $_POST['food'];
    echo "<p>Meal Preference: $food</p>";
}

if (isset($_POST['partysize'])) {
    $partySize = $_POST['partysize'];
    echo "<p>Number of travellers: $partySize</p>";
}
?>

</body>
</html>