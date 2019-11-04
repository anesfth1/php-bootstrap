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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" style="padding:20px:">
                <div class="card">
                    <div class="card-header">Latihan</div>
                    <div class="card-body">
                        <form action="lth2.php" method="post">
                            <div class="form-group">
                                <label for="">Masukan Jumlah Siswa</label>
                                <input type="text" name="data" class="form-control"> 
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">
                                   Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
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