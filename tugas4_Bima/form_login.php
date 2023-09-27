<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card ">
                <div class="card-title text-center">
                    <h1>Login Form</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="form_login.php" class="text-center">
                        <label for="username">Username:</label>
                        <input type="text" name="username" required><br><br>
                        <label for="password">Password:</label>
                        <input type="password" name="password" required><br><br>
                        <input type="submit" name="submit" value="Login" class="btn-primary">
                    </form>

            <?php
            // Fungsi untuk memeriksa login
            function cekLogin($username, $password) {
                // Ganti dengan username dan password yang benar
                $usernameBenar = "admin";
                $passwordBenar = "mimin";

                if ($username === $usernameBenar && $password === $passwordBenar) {
                    header("Location: admin.php");
                    exit;
                } else {
                    echo "Username atau password salah!";
                }
            }

            // Memeriksa jika form telah disubmit
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                cekLogin($username, $password);
            }
            ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
