<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Bootstrap</title>
    <link rel="Stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="lth.php">Smk Assalaam</a>
  <a href="login.php">Logout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
    <!-- End Header -->
   
    <!-- Content -->
    <?php 
       if(isset($_POST['input'])) {
		    $nama =$_POST['nama'];
			$kelas=$_POST['kelas'];
			$harian=$_POST['harian'];
			$uts=$_POST['uts'];
            $uas=$_POST['uas'];
       ?>
            <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama[$nama]" class="form-control"> 
            </div>
            <div class="form-group">
            <label for="">Kelas</label>
            <input type="text" name="kelas[$kelas]" class="form-control"> 
            </div>
            <div class="form-group">
            <label for="">Nilai Harian</label>
            <input type="text" name="harian[$harian]" class="form-control"> 
            </div>
            <div class="form-group">
            <label for="">Nilai UTS</label>
            <input type="text" name="uts[$uts]" class="form-control"> 
            </div>
            <div class="form-group">
            <label for="">Nilai UAS</label>
            <input type="text" name="uas[$uas]" class="form-control"> 
            </div>
      
    <?php }	?>
    <!-- End Content -->
    
    <!-- Footer -->
    <footer>
          <center> &copy 2019 Smk Assalaam</center>
    </footer>
    <!-- End Footer -->

    <!-- Pemanggilan JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Akhir Pemanggilan JS -->
</body>
</html>