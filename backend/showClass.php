<?php
include("conn.php");
    function getAllClass($conn){
        $sql = "SELECT id,name,type FROM classroom";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
          return $users;
        } else {
          return null;
        }
    }
    
    $allClasses = getAllClass($conn);
    if ($allClasses !== null) {
        foreach ($allClasses as $class) {
            echo "<tr>
                <th scope='row'>".$class['id']."</th>
                <td>".$class['name']."</td>
                <td>".$class['type']."</td>
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