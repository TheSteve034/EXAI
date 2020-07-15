<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Hulk22Lion908";
$done = false;
$seshID = session_id();
$q1Res = $_POST["question1Text"];
$q2Res = $_POST["question2Text"];
$q3Res = $_POST["question3Text"];
$nextPage = $_SESSION["NextR"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //prepare SQL Statement
    $SQL = $conn->prepare("INSERT INTO final_survey_answer (session_ID, q1, q2, q3)
                                    VALUES (:session_ID, :q1, :q2, :q3)");
    //bind parameters
    $SQL->bindParam(':session_ID',$seshID);
    $SQL->bindParam(':q1',$q1Res);
    $SQL->bindParam(':q2',$q2Res);
    $SQL->bindParam(':q3',$q3Res);
    //execute query
    $SQL->execute();

    $done = true;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if ($done)
{
    header($nextPage);
    exit;
}


/*echo "session ID: " . $seshID . "<br>";
if($_POST["question1Text"]) {
    echo "<br>";
    $q1Res = $_POST["question1Text"];
    echo "Q1 answer: " . $q1Res . "<br>";
}

if($_POST["question2Text"]) {
    echo "<br>";
    $q2Res = $_POST["question2Text"];
    echo "Q2 answer: " . $q2Res . "<br>";
}

if($_POST["question3Text"]) {
    echo "<br>";
    $q3Res = $_POST["question3Text"];
    echo "Q3 answer: " . $q3Res . "<br>";
}*/
