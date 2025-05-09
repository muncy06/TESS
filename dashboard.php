
<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <h2>Selamat Datang!</h2>
  <p><a href="logout.php">Logout</a></p>

  <h3>Sertifikat Anda:</h3>
  <img src="foto/<?php echo $_SESSION['file']; ?>" alt="Sertifikat" width="300"><br><br>
  <a href="foto/<?php echo $_SESSION['file']; ?>" download>Unduh Sertifikat</a>
</body>
</html>
