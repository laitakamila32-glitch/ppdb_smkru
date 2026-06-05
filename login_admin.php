<?php
    session_start();
    include "koneksi.php";

    $error = "";

    if($_POST){

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $query = mysqli_query($conn,
        "SELECT * FROM data_user WHERE username='$username'");

        $user = mysqli_fetch_assoc($query);

        if($user){

            if($password == $user['password']){

                $_SESSION['user'] = $user['nama'];
                $_SESSION['id'] = $user['id'];

                header("Location: admin/dashboard.php");
                exit;

            }else{
                $error = "Password salah!";
            }

        }else{
            $error = "Username & Password tidak ditemukan!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <h2>Login admin session</h2>

        <?php if($error != ""){ ?>
            <div class="error">
                <?= $error; ?>
            </div>
        <?php } ?>

        <form method="POST">
            <div class="inputform">
                <input type="name" name="username" required>
                <label for="username">Username</label>
            </div>

            <div class="inputform">
                <input type="password" name="password" required>
                <label for="password">Password</label>
            </div>

            <button type="submit">Login</button>  
        </form>
    </div>
</body>
</html>   