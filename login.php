<?php

include("koneksi.php");


if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if(isset($user)){
        if($user["password"]){
        session_start();
            $_SESSION['login'] = true;
            $_SESSION['id_user'] = $user["id"];
            $_SESSION['role_id'] = $user["role_id"];
            $_SESSION['nama'] = $user["name"]; ?>
            <!--login sukses, alihkan ke halaman timeline-->
            <script>
        window.location.href = "tambah.php",true;
      </script>
        <?php }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link href="css_main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action="" method="POST">
	<h4 align="center"><span>Welcome To</h4>
  <h1><span>Event</span>Booking</h1>
  <input placeholder="Username" type="text" name="username" />
  <input placeholder="Password" type="password" name="password" />
  <button class="btn" type="submit" name="login">Log in</button>
  <h6></h6>
</form>

<footer>
  <h5>Belum Punya Akun ya?  <a  href="register.php">Daftar Dulu Dong</a></h5>
</footer>
</body>
</html>
