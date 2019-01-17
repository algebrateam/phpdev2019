<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="GET" action="#" name="broj">
            <?php
            for ($index = 1; $index <= 5; $index++) {
                echo '<li><a href="dz1_skripta.php?broj='.$index.'">' . $index . '</a></li>';
            }
            ?>

        </form>
    </body>
</html>

<?php
if (isset($_GET['broj'])) {
    foreach ($_GET as $value) {
        echo 'Odabrani broj je: '.$value;
    }
}