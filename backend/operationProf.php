<?php
ob_start();
include("conn.php");

function countUsers($conn)
{
    $sql = "SELECT MAX(num) as count FROM users";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['count'];
    } else {
        return 0;
    }
}
function countProff($conn)
{
    $sql = "SELECT COUNT(*) as count FROM professeur";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['count'];
    } else {
        return 0;
    }
}
function countStudent($conn)
{
    $sql = "SELECT MAX(id) as count FROM students";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['count'];
    } else {
        return 0;
    }
}
function countClass($conn)
{
    $sql = "SELECT MAX(id) as count FROM classroom";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['count'];
    } else {
        return 0;
    }
}
function countSession($conn)
{
    $sql = "SELECT MAX(id) as count FROM time_slot";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['count'];
    } else {
        return 0;
    }
}
if (isset($_POST["name"]) && isset($_POST["username"]) && isset($_POST["password"])) {
    $i = countUsers($conn) + 1;
    $ip = countProff($conn) + 1;
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql1 = "INSERT INTO users VALUES ('$i','$username','$password','prof', 'null')";
    $result1 = mysqli_query($conn, $sql1);
    $sql = "INSERT INTO professeur VALUES ('$ip','$name','$i')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../pages/dashboard.php?success=the addition successful");
        exit;
    }
} elseif (isset($_POST["nameS"]) && isset($_POST["branchS"]) && isset($_POST["usernameS"]) && isset($_POST["passwordS"])) {
    $i = countUsers($conn) + 1;
    $is = countStudent($conn) + 1;
    $name = $_POST["nameS"];
    $branch = $_POST["branchS"];
    $username = $_POST["usernameS"];
    $password = $_POST["passwordS"];
    $sql1 = "INSERT INTO users VALUES ('$i','$username','$password','student', '$branch')";
    $result1 = mysqli_query($conn, $sql1);
    $sql = "INSERT INTO students VALUES ('$is','$name','$i')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../pages/dashboard.php?success=the addition successful");
        exit;
    }
} elseif (isset($_POST["nameC"]) && isset($_POST["typeC"])) {
    $ic = countClass($conn) + 1;
    $name = $_POST["nameC"];
    $type = $_POST["typeC"];
    $sql = "INSERT INTO classroom VALUES ('$ic','$name','$type')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../pages/dashboard.php?success=the addition successful");
        exit;
    }
}elseif (isset($_POST["modul"]) && isset($_POST["prof"]) && isset($_POST["class"]) && isset($_POST["level"]) && isset($_POST["group"]) && isset($_POST["time"]) && isset($_POST["day"])){
    $is = countSession($conn) + 1;
    $modul = $_POST["modul"]; 
    $level = $_POST["level"]; 
    $prof = $_POST["prof"]; //this
    $class = $_POST["class"]; //this
    $group = $_POST["group"];
    $time = $_POST["time"]; // claas+time+day condition
    $day = $_POST["day"];

    $sql = "SELECT * FROM professeur WHERE name = '$prof'";
    $result = mysqli_query($conn, $sql);
    $pro_row = mysqli_fetch_assoc($result);
    
    if($result && mysqli_num_rows($result) > 0){
        
        $sql1 = "SELECT * FROM classroom WHERE name = '$class'";
        $result1 = mysqli_query($conn, $sql1);
        $class_row = mysqli_fetch_assoc($result1);
        if($result1 && mysqli_num_rows($result1) > 0){
            $sql4 = "INSERT INTO time_slot VALUES ('$is','$modul','{$pro_row['id']}','{$class_row['id']}','$group','$level','$time','$day')";
            $result2 = mysqli_query($conn, $sql4);
            if ($result2) {
                header("Location: ../pages/dashboard.php?success=the addition successful");
                exit;
            }
           
        }else{
            header("Location: ../pages/dashboard.php?error=class not found");
            exit;
        }
    }else{
        header("Location: ../pages/dashboard.php?error=professor not found");
        exit;
    }
}else {
    header("Location: ../pages/dashboard.php");
    ob_end_flush();
    exit;
}
?>