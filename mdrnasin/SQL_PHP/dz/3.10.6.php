<?php

include_once './mysqli_connection_obj.php';
$query = "select COUNT(nastavnik.prezNastavnik) from nastavnik where nastavnik.prezNastavnik like '%m'";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_array()) {
        echo 'Broj nastavnika čije ime pocinje sa slovom a je ' . $row[0];
    }
}

