<?php

include_once './mysqli_connection_obj.php';
$query = "select COUNT(nastavnik.prezNastavnik) AS broj from nastavnik where nastavnik.prezNastavnik like 'm%'";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_array()) {
        echo 'Broj nastavnika čije ime pocinje sa slovom m je ' 
      . $row['broj'].' '.$row[0];
    }
}

