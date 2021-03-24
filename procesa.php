Valor del Post demo: = 
<?php
$tiempo = time();
$demo = $_POST['demo'];
echo $_POST['demo'];
?>

<br>Acciones de php:
<br>// actualiza bd..
<br>// envia email..
<br>si todo ok..

<!-- y en el script, que se cierra, se envian GETs a abre_form:  -->
<?php
echo "<script>
setTimeout(function() {
opener.location.href='abre_form.php?a=$demo&tiempo=$tiempo';
self.close();
}, 666)
</script>";
?>
