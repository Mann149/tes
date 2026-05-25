<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  mysqli_query($conn, "INSERT INTO user (username, password, email)
  VALUES ('$username','$password','$email')");

  echo "login berhasil";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM PENDAFTARAAN</title>
</head>
<body>
  <center>
    <h2>SELAMAT DATANG</h2>
    <P>SILAHKAN FORMULIR</P>

    <form method="POST">
      <input type="text" name="username" placeholder="masukan username" required><br>
      <input type="password" name="password" placeholder="masukan password" required><br>
      <input type="email" name="email" placeholder="masukan email" required><br>

      <button type="submit" name="submit">masuk</button>
    </form>
  </center>
</body>
</html>