<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Hulk22Lion908";
$done = false;

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //gather needed DB data
    $seshID = session_id();
    $rId = $_SESSION["rcount"];
    $q1 = $_POST["question1"];
    $q2 = $_POST["question2"];
    $q3 = $_POST["question3"];
    $q4 = $_POST["question4"];
    $q5 = $_POST["question5"];
    $q6 = $_POST["question6"];

    //prepare SQL statement
    $SQL = $conn->prepare("INSERT INTO survey_answers (session_ID, recipe_ID, q1, q2, q3, q4, q5, q6)
                                    VALUES (:session_ID, :recipe_ID, :q1, :q2, :q3, :q4, :q5, :q6)");
    //bind parameters
    $SQL->bindParam(':session_ID',$seshID);
    $SQL->bindParam(':recipe_ID',$rId);
    $SQL->bindParam(':q1',$q1);
    $SQL->bindParam(':q2',$q2);
    $SQL->bindParam(':q3',$q3);
    $SQL->bindParam(':q4',$q4);
    $SQL->bindParam(':q5',$q5);
    $SQL->bindParam(':q6',$q6);
    //execute query
    $SQL->execute();

    $done = true;
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
if ($done)
{
    header("Location: last_tutorial.php");
    exit;
}


/*if($_POST["question1"]) {
    //echo "<br>";
    $q1Res = $_POST["question1"];
    $lastRec = $_SESSION["rcount"];
    //echo "Question 1 from last page was: " . $q1Res . "<br>";
    //echo "last Recommendation was " . $lastRec;

}*/

