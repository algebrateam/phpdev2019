<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <form action="#" method="GET">
        Ime: <input type="text" name="ime" size="22"><br>
        Prezime: <input type="text" name="prezime" size="22"><br>
        Spol: <input type="radio" name="spol" value="M" checked>Muško
        <input type="radio" name="spol" value="Ž">Žensko<br>
        Županija: <select name="zupanija">
            <option value="1">Grad Zagreb</option>
            <option value="2">Zagrebačka županija</option>
        </select><br>
        Interesi:<br>
        <input type="checkbox" name="interesi" value="1">Sport<br>
        <input type="checkbox" name="interesi" value="2">Muzika<br>
        <input type="checkbox" name="interesi" value="2">Računala<br>
        Napomena: <textarea name="napomena" rows="4" cols="20">
        </textarea><br><br>
        <input type="submit" name="submit_btn" value="Obrada"></input>
    </form>

</div>

</body>
</html>
<?php
if (isset($_GET['submit_btn'])){
    print_r($_GET);
    echo '<br>';
    echo 'Varijabla ime je:'.$_GET['ime'];
}
