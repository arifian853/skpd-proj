<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <title>SKPD</title>
</head>

<body>
    <div class="form-high">
        <div class="logo-title">
            <img src="../assets/img/kepri-logo.svg" class="form-logo" alt="">
            <h3>SISTEM LAYANAN <br /> PENCAIRAN DANA</h3>
        </div>

        <?php 
        
        include("../php/config.php");

        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $verify_query = mysqli_query($con, "SELECT Email FROM users_pengaju WHERE Email='$email'");

            if(mysqli_num_rows($verify_query) !=0) {
                echo " <br />
                <div class='alert alert-danger'> 
                        <p class='text-center'> Email ini sudah dipakai, silakan gunakan alamat email lain </p>
                      </div>
                      <br />";
                echo "<a href='javascript:self.history.back()'> <button class='btn btn-primary'> Kembali </button> </a>";
            }
            else {
                mysqli_query($con, "INSERT INTO users_pengaju(Username,Email,Password) VALUES('$username', '$email', '$password')") or die("Sepertinya ada kesalahan");
    
                echo " <br />
                <div class='alert alert-success'> 
                        <p class='text-center'> Pendaftaran berhasil, silakan login. </p>
                      </div>
                      <br />";
                echo "<a href='login-pengajuan.php'> <button class='btn btn-primary'> Masuk (login) sekarang </button> </a>";
            }
            

        } else {

       ?>

        <form method="post" class="main-form">
            <label class="text-center bg-success p-2 rounded-2">Daftar akun baru</label>
            <label class="label-login" for="email">Alamat email</label>
            <input type="email" name="email" id="email" placeholder="Alamat email" required>
            <label class="label-login" for="username">ID Pengguna (Username)</label>
            <input type="text" name="username" id="username" placeholder="ID Pengguna" required>
            <label class="label-login" for="password">Kata Sandi (Password)</label>
            <input type="password" name="password" id="password" placeholder="Kata Sandi" required>
            <div class="btn-container">
                <button type="submit" name="submit" class="login-btn" value="Register">Daftar</button>
            </div>
            <label>Sudah punya akun ? masuk <a class="text-decoration-none text-warning" href="/index.php">disini</a></label>
        </form>
        <?php } ?>
    </div>
</body>

</html>