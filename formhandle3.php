<?php
if (isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    if($username=="aungaung" && $password="123456"){
        //Redirect
        header("Location:https://google.com");
        // Current Exit
        exit();

    }else {
        echo "Username and password do not match";
    }
}
echo "<hr/>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Handling 3</title>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
<table border="1">
<thead>
<tr>
    <th colspan="2">Login Form</th>
</tr>
</thead>
<tbody>
<td>
<label for="username">User Name</label></td>
<td><input type="text" name="username" id="username" class="" required>
</td>
<tr>
<td>
<label for="password">Password</label></td>
<td><input type="password" name="password" id="password" class="" required>
</td>
</tr>

</tbody>
<tfoot>
<tr>
<td colspan="2" align="right">
<input type="reset" name="reset" id="reset" class="" value="Reset">
<input type="submit" name="login" id="login" class="" value="Log in">
</td>
</tr>
</tfoot>

</table>
</form>
</body>
</html>