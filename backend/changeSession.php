<?php

ob_start();
include("conn.php");

if(isset($_POST["modul"])&&isset($_POST["level"])&&isset($_POST["group"])&&isset($_POST["time"])&&isset($_POST["day"])){
    $level = $_POST["level"];
    $group = $_POST["group"];
    $time = $_POST["time"];
    $modul = $_POST["module"];
    $sql = "INSERT INTO change_request VALUES()"

}else{
    header("Location: ../pages/professorPage.php");
    ob_end_flush();
    exit;
}

?>
