<?php
ob_start();
include("conn.php");
if (isset($_POST["user"]) && isset($_POST["password"])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST["user"]);
    $password = validate($_POST["password"]);

    if (empty($username)) {
        header("Location: ../index.php?error=username invalide");
        exit;
    } elseif (empty($password)) {
        header("Location: ../index.php?error=password invalide");
        exit;
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        
            if ($row["username"] === $username && $row["pass"] === $password) {
                if ($row["role"]=== "student") {
                    if ($row["branch"]=== "si") {
                        header("Location:../pages/licence.php?branch=si");
                        exit;
                    }elseif ($row["branch"]=== "gl") {
                        header("Location: ../pages/licence.php?branch=gl");
                        exit;
                    }elseif ($row["branch"]=== "glm1") {
                        header("Location: ../pages/master.php?branch=glm1");
                        exit;
                    }elseif ($row["branch"]=== "glm2") {
                        header("Location: ../pages/master.php?branch=glm2");
                        exit;
                    }elseif ($row["branch"]=== "sitwm1") {
                        header("Location: ../pages/master.php?branch=sitwm1");
                        exit;
                    }elseif ($row["branch"]=== "sitwm2") {
                        header("Location: ../pages/master.php?branch=sitwm2");
                        exit;
                    }elseif ($row["branch"]=== "ilsim1") {
                        header("Location: ../pages/master.php?branch=ilsim1");
                        exit;
                    }elseif ($row["branch"]=== "sdsim1") {
                        header("Location: ../pages/master.php?branch=sdsim1");
                        exit;
                    }

                }elseif ($row["role"]==="prof"){
                    header("Location: ../pages/professorPage.php?user=$username");
                    exit;
                }elseif($row["role"]==="admin"){
                    header("Location: ../pages/dashboard.php");
                    exit;
                }

            }


        } else {
            echo "<br> Invalid username or password";
        }
    }
} else {
    header("Location: ../index.php");
    ob_end_flush();
    exit;
}


?>