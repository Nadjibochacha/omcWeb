<?php
include("conn.php");
    function getAllProfessors($conn){
        $sql = "SELECT num, name, username, pass FROM users, professeur WHERE num = iduser";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
          return $users;
        } else {
          return null;
        }
    }
    $allUsers = getAllProfessors($conn);
    if ($allUsers !== null) {
        foreach ($allUsers as $user) {
            echo "<tr>
                <th scope='row'>".$user['num']."</th>
                <td>".$user['name']."</td>
                <td>".$user['username']."</td>
                <td>".$user['pass']."</td>
                <td>
                    <button type='submit' class='btn btn-success'>modify</button>
                </td>
                <td>
                    <button type='reset' class='btn btn-danger'>delete</button>
                </td>
            </tr>";

        }
    }
        
?>