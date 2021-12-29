<?php require "functions.php";
    if (isset($_POST['submit'])) {
        if(check_login($_POST)){
            header('Location: index.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div align ="center">
    <h1>Selamat Datang di Sistem Informasi Surat Masuk Sekolah<h1>
    <br>
    <h2>Login</h2>

    <form action="" method="POST">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required> <br></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" name="password" required> <br></td>
                </tr>
                <tr>
                    <td>    </td>
                    <td><button type="submit" name="submit">Login</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
