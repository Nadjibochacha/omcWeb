<?php
include("conn.php");
    $user = $_GET["user"];
    function getProfSession($conn, $id) {
        $sql = "SELECT t.id,modul,c.name as cname, grp, branch, timeS,dayS FROM time_slot t, professeur p, classroom c WHERE idp=p.id AND p.name = '$id' AND idc=c.id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
          return $users;
        } else {
          return null;
        }
    }
  
    $allClasses = getProfSession($conn,$user);
    if ($allClasses !== null) {
        $i = 0;
        foreach ($allClasses as $class) {
            echo "<tr>
                <th scope='row'>".$i."</th>
                <td>".$class['modul']."</td>
                <td>".$class['cname']."</td>
                <td>".$class['branch']." ".$class['grp']."</td>
                <td>".$class['timeS']."</td>
                <td>".$class['dayS']."</td>
            </tr>";
            $i++;
        }
    }
       
?>