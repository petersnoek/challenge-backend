<?php

// create datbase connection or fail with errormessage

$user = 'challenge-backend';
$pass = 'challenge-backend';
$db = null;

try {
    $db = new PDO('mysql:host=localhost;dbname=challenge-backend', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

//echo 'connection ok';