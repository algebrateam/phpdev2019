<?php

include_once './mysqli_connection_obj.php';
$query = "SELECT * FROM stud where imeStud = 'Ivan'";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        echo $row['imeStud'] . $row['prezStud'] . $row['mbrStud'];
        echo '<br>';
    }
}

