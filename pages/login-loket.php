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
    <div class="form">
        <div class="logo-title">
            <img src="../assets/img/kepri-logo.svg" class="form-logo" alt="">
            <h3>SISTEM LAYANAN <br /> PENCAIRAN DANA</h3>
        </div>
        <form action="login.php" method="post" class="main-form">
            <label class="text-center bg-success p-2 rounded-2">Loket penerimaan</label>
            <label class="label-login" for="username">ID Pengguna (Username)</label>
            <input type="text" name="username" id="username" placeholder="ID Pengguna" required>
            <label class="label-login" for="password">Kata Sandi (Password)</label>
            <input type="password" name="password" id="password" placeholder="Kata Sandi" required>
            <div class="btn-container">
                <button class="login-btn" type="submit" value="login">Login</button>
            </div>
        </form>
    </div>
</body>

</html>