<html>
<body>
    <h1> Forum Page </h1>
        <h2> Register Page </h2>
<form method="get">
    <label for ="name">Name*        </label>  <input type="text" name="name" /> <br>
    <label for ="password">Surname</label>  <input type="text" name="surname" /><br>
    <label for ="name">Mail*       </label>  <input type="text" name="mail" /> <br>
    <label for ="password">Password*</label>  <input type="text" name="password" /><br>
    <label for ="gender">Gender</label><br><input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>

<input type="submit" class="button" name="register" value="Submit" />
</form>
    </body></html>    
<?php
$user_name = $_GET["name"];
$user_surname = $_GET["surname"];
$user_password = $_GET["password"];
$user_mail = $_GET["mail"];
$user_gender = $_GET["gender"];
?>