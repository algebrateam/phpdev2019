<?php

include_once './mysqli_connection_obj.php';
$query = "select * from stud where stud.pbrRod like 10000";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        echo '<ul>';
        echo '<li>' . $row['prezStud'] . ' ' . $row['imeStud'] . '</li>';
        echo '<br>';
        echo '</ul>';
    }
}

