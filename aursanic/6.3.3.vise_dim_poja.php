<html><head>

  <!-- Ovo je za potrebe designera -->
<style>
    li{color:blueviolet}
   #idfavorit{color:red}

  </style>
  </head><body>
<?php

$fiati=array('Bravo', 'Tipo','nekinovifiat', 'Croma','favorit'=>'multipla','Punto');

//echo $fiati[1];
//echo $fiati[3];

print_r($fiati);
echo $fiati['favorit'];

echo '<ul>';
foreach ($fiati as $key => $value) {
  echo "<li id='id".$key."' name='name".$key."'>".$value."</li>";
}
echo '</ul>';

echo '<hr>';

foreach ($fiati as $oznaka => $model) {
  echo ' # '.$oznaka. ' je pokazivač na '.$model.'<br>';
  
}

?>
  
  <!-- Ovo je za potrebe fronend developera -->
  
  <hr>
  Ovo je ispis iz javascripta:
  <br>
  <script lang="javascript" type="text/javascript">
    var auti=<?= json_encode($fiati) ?>;
    console.log(auti);
    console.log(auti.favorit);
     console.log(auti['3']);
    document.write('Ovo je vrijednost:'+document.getElementById('idfavorit').innerHTML);
    </script>
  </body>
</html>



