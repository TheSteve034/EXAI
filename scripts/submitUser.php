<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Hulk22Lion908";
$done = false;

$type = $_POST["userType"];
$age = $_POST["userAge"];
$gender = $_POST["userGender"];
$iT= $niT ="";
$seshID = session_id();
if($type == 1) {
    $it="1";
    $niT="0";
} else {
    $it="0";
    $niT="1";
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //gather needed DB data
    //echo "connected <br>";
    $SQL = $conn->prepare("INSERT INTO user (session_ID, is_tech, is_non_tech, age, gender)
                                    VALUES (:session_ID, :is_tech, :is_non_tech, :age, :gender)");
    $SQL->bindParam(':session_ID',$seshID);
    $SQL->bindParam(':is_tech',$it);
    $SQL->bindParam(':is_non_tech',$niT);
    $SQL->bindParam(':age',$age);
    $SQL->bindParam(':gender',$gender);
    $SQL->debugDumpParams();
    $SQL->execute();
    $done = true;
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if($done) {
    header("Location: ../recommendations/sessionEX_1.php");
    exit;
}