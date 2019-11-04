<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gaji Karyawan</title>
    <h2 align="center">DATA GAJI KARYAWAN</h2>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
      <form action="proses.php" method="POST" enctype="multipart/form-data">
      <fieldset>
      <legend>Data Karyawan</legend>
      <pre>
      <input type="text" name="nama" placeholder="Nama" required>
      <br>
      <input type="number" name="nip" placeholder="NIP" required>
      <br>
      <textarea name="alamat" placeholder="Alamat" required></textarea>
      <br>
      <input type="number" max="30" name="jumlah" placeholder="Jumlah Hari Kerja" required>
      <br>
      <input type="submit" name="Simpan"> 
      </pre>  
      </fieldset>
      </form>
</body>
</html>