<?php
    require '../views/header.php';
?>
<div id="content">
    <form action="/login/in" method="post">
    	<label>Usuario:</label><input type="text" name="user">
    	<input type="submit" value="Login">
    </form>
</div>

<?php
    require '../views/footer.php';
?>
