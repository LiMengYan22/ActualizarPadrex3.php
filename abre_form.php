
<button onclick="window.open('form.php','nv','width=500,height=500')">Abrir ventana</button>
<p>Variables:
  <br/>
  <b>get en el action de form.php y luego del delay lo que se recibió por $_POST['demo'] en procesa.php</b>
</p>
<!-- Si existe la variable.. -->
<?php
if(isset($_GET['a'])){
echo $_GET['a'];
}
?>
