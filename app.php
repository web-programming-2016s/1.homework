<html>
<body>
    <h2> Forum Page </h2>
<form method="get">
    <label for ="name">Name        </label>  <input type="text" name="name" /> <br>
    <label for ="password">Password</label>  <input type="text" name="password" /><br>
<input type="submit" class="button" name="login" value="Log In" />
<input type="submit" class="button" name="register" value="Register" />
</form>
    </body></html>    
<?php
$user_name = $_GET["name"];
$user_password = $_GET["password"];


?>