<?php
    require '../views/header.php';
?>
<div id="content">
<h1>Alta Cliente</h1>
<form method="post" action="/client/insert">
    <label>Nombre</label>
    <input type="text" name="name"> <br>
    <label>Dirección</label>
    <input type="text" name="address"> <br>
    <label>Teléfono</label>
    <input type="number" name="phone"> <br>
    <label>Crédito</label>
    <input type="number" name="credit"> <br>
    <label></label>
    <input type="submit" name="Enviar">
</form>
</div>

<?php
    require '../views/footer.php';
?>
