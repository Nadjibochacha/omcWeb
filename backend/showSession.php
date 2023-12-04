<?php
include("conn.php");
    function getAllSession($conn){
        $sql = "SELECT t.id,modul,p.name as pname, c.name as cname, grp, branch, timeS,dayS FROM time_slot t, professeur p, classroom c WHERE idp=p.id AND idc=c.id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
          return $users;
        } else {
          return null;
        }
    }
   
    $allClasses = getAllSession($conn);
    if ($allClasses !== null) {
        foreach ($allClasses as $class) {
            echo "<tr>
                <th scope='row'>".$class['id']."</th>
                <td>".$class['modul']."</td>
                <td>".$class['pname']."</td>
                <td>".$class['cname']."</td>
                <td>".$class['branch']." ".$class['grp']."</td>
                <td>".$class['timeS']."</td>
                <td>".$class['dayS']."</td>
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