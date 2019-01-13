<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div style="width: auto">
            <form method="GET" action="#">
                Broj datoteka za upload: <input name="broj_datoteka" type="number" required="true" max="5"><br>
                <input type="submit" name="broj_datoteka_btn" value="submit">
                 
            </form>

        </div>

        <div style="width:auto">
            <form method="POST" action="#">
                <?php
                if (isset($_GET['broj_datoteka_btn'])) {
                    for ($i = 1; $i <= $_GET['broj_datoteka']; $i++) {
                        ?>
                        <fieldset>       

                            <input type="file" name="datoteka" >
                            
                        </fieldset>
                    <?php } ?>
                    <input type="submit" name="upload" value="upload">
                <?php } ?>

            </form>

        </div>
    </body>
</html>
<?php
if (isset($_POST['upload'])) {
    echo 'Vaše datoteke su uploadane';
}