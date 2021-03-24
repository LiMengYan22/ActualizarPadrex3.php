<?php
/* Se declara la variable: */
$a = "A";
?>

<!-- El form, con action a procesa.php / y un par de GETs / y un input que se inserta: -->
<form action="procesa.php" onsubmit="opener.location.href='abre_form.php?a=<?php echo $a; ?>&amp;tiempo=<?php echo time(); ?>';" method="post">
  Ingresar un valor: 
  <input type="text" name="demo" value=""/>
  <input type="submit" value="procesar"/>
</form>
