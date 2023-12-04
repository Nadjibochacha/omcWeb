<?php
include("conn.php");
    function getAllReq($conn){
        $sql = "SELECT r.id as id ,modul,p.name as pname, c.name as cname, grp, branch, newtime,newday FROM time_slot t, professeur p, classroom c,change_request r WHERE r.id_old_slot = t.id AND idp=p.id AND idc=c.id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
          return $users;
        } else {
          return null;
        }
    }
    
    $allClasses = getAllReq($conn);
    if ($allClasses !== null) {
        foreach ($allClasses as $class) {
            echo "<tr>
                <th scope='row'>".$class['id']."</th>
                <td>".$class['modul']."</td>
                <td>".$class['pname']."</td>
                <td>".$class['cname']."</td>
                <td>".$class['branch']." ".$class['grp']."</td>
                <td>".$class['newtime']."</td>
                <td>".$class['newday']."</td>
                <td>
                    <button type='submit' class='btn btn-success'>accept</button>
                </td>
                <td>
                    <button type='reset' class='btn btn-danger'>delete</button>
                </td>
            </tr>";
        }
    }
       
?>