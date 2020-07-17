<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Hulk22Lion908";
$seshID = session_id();
$rId = $_SESSION["rcount"];
$sCount = $_POST["sCount"];
$tCount = $_POST["tCount"];
$vCount = $_POST["vCount"];
$iCount =$_POST["iCount"];
$dCount = $_POST["dCount"];
$time = $_POST["pageTime"];
$done = false;

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $SQL = $conn->prepare("INSERT INTO clicks (session_ID, r_ID, simp_clickCount, tech_clickCount, vis_clickCount, i_clickCOunt, d_clickCount)
                                    VALUES (:session_ID, :r_ID, :simp_clickCount, :tech_clickCount, :vis_clickCount, :i_clickCount, :d_clickCount)");

    $SQL->bindParam(':session_ID',$seshID);
    $SQL->bindParam(':r_ID',$rId);
    $SQL->bindParam(':simp_clickCount',$sCount);
    $SQL->bindParam(':tech_clickCount',$tCount);
    $SQL->bindParam(':vis_clickCount',$vCount);
    $SQL->bindParam(':i_clickCount',$iCount);
    $SQL->bindParam(':d_clickCount',$dCount);

    $SQL->execute();

    $SQL1 = $conn->prepare("INSERT INTO page_time (session_ID, r_ID, time_spent)
                                     VALUES (:session_ID, :r_ID, :page_time)");
    $SQL1->bindParam(':session_ID',$seshID);
    $SQL1->bindParam(':r_ID',$rId);
    $SQL1->bindParam(':page_time',$time);

    $SQL1->execute();

    $done = true;
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(done) {
    exit;
}