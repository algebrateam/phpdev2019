<!DOCTYPE html>
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div>
      <form action="#" method="GET">
        Ime: <input type="text" name="ime" value="" size="22" /><br>
        Prezime: <input type="text" name="prezime" value="" size="22" /><br>
        spol: <input type="radio" name="spol" value="M" checked="checked" />musko
        <input type="radio" name="spol" value="Z" />žensko<br>
        
        Županija:
        <select name="zupanija">
          <option value="1">Grad Zagreb</option>
          <option value="2">Zagrebačka županija</option>
        </select><br>
        
        Interesi: <br>
        <input type="checkbox" name="interesi" value="1" />sport<br>
        <input type="checkbox" name="interesi" value="2" />muzika<br>
        <input type="checkbox" name="interesi" value="3" />racunala<br>
        <br>
        Napomena:<br>
        <textarea name="napomena" rows="4" cols="20">
        </textarea>
        <br><br>
        <input type="submit" value="Obrada" name="submit_btn" />
        
      </form>
    
    
    </div>
  </body>
</html>
<?php
if(isset($_GET['submit_btn'])){
print_r($_GET);
echo '<br>';
echo 'varijabla ime je:'.$_GET['ime'];
}
