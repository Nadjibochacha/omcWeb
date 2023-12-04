<?php

ob_start();
include("conn.php");
function countRequest($conn)
{
    $sql = "SELECT MAX(id) as count FROM change_request";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['count'];
    } else {
        return 0;
    }
}
$userP = $_POST["userP"];

if (isset($_POST["modul"]) && isset($_POST["class"]) && isset($_POST["time"]) && isset($_POST["day"]) && isset($_POST["timeN"]) && isset($_POST["dayN"])) {

    $ir = countRequest($conn) + 1;
    $time = $_POST["time"];
    $day = $_POST["day"];
    $timeN = $_POST["timeN"];
    $dayN = $_POST["dayN"];
    $modul = $_POST["module"];
    $class = $_POST["class"];
    $sql = "SELECT * FROM classroom WHERE name = '$class'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $class_row = mysqli_fetch_assoc($result);
        $sql1 = "SELECT * FROM time_slot WHERE timeS = '$time' AND dayS = '$day' AND idc = '{$class_row['id']}'";
        $result1 = mysqli_query($conn, $sql1);
        $time_row = mysqli_fetch_assoc($result1);
        
        if ($result1) {
            $sql2 = "INSERT INTO change_request VALUES ($ir,'{$time_row['id']}','$timeN','$day')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: ../pages/professorPage.php?user=$userP&success=request successful");
                exit;
            }
        }

    }
}else{
    header("Location: ../pages/professorPage.php?user=$userP");
    ob_end_flush();
    exit;
}

?>
