<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $validate = false;

        if($user>7){
            echo "Panjang username tidak boleh lebih dari 7 karakter<br>";
            $validate = true;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "Password wajib menggunakan kapital<br>\n";
            $validate = true;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "password wajib huruf kecil<br>\n";
            $validate = true;
        }
        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "password wajib menggunakan special character<br>\n";
            $validate = true;
        }
        if (!preg_match("/[0-9]/", $password)) {
            echo "password wajib menggunakan digit<br>\n";
            $validate = true;
        }
        if($pass<10){
            echo "password tidak diperbolehkan kurang dari 10<br>\n";
            $validate = true;
        }
        if( $validate == false ){
            echo "Login Sukses";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Login Form</title>
</head>
<body>
<form action="" method="post" name="Login_Form">
    <fieldset>
    <legend><b>Login</b></legend>
    <table border="0" align="center">
        <tr>
        <td colspan="2" align="center"></td>
        </tr>
        <tr>
        <td align="right">Username : </td>
        <td><input name="username" type="text" placeholder="Username"></td>
        </tr>
        <tr>
        <td align="right">Password : </td>
        <td><input name="password" type="text" placeholder="Password" ></td>
        </tr>
        <tr>
        <td align="right"></td>
        <td><label><input type="checkbox" name="remember" value="remember" /> Remember me</label></td>
        </tr>
        <tr>
        <td> </td>
        <td><input name="Submit" type="submit" value="Login"></td>
        </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>