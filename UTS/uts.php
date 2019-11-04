<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="lth.php">Smk Assalaam</a>
  <a class="navbar-brand" href="login.php">Home</a>
  <a class="navbar-brand" href="login.php" align="rigth">Logout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
    <title>Data Pembeli</title>
  </head>
  <body>
  <center><h2>Data Pembeli</h2></center>
   <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pembeli</div>
                       <div class="card-body">
                         <form action="uts2.php" method="post">
                            <div class="form-group">
                               <label for="">Nama</label>
                               <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="5"></textarea>
                             </div>
                             <div class="form-group">
                                <label for="">Jenis Kelamin</label><br>
                                <input type="radio" name="kelamin" value="Laki-Laki">Laki-Laki </label>
                                <input type="radio" name="kelamin" value="perempuan">Perempuan </label>
                             </div>
                             <div class="form-group">
                                <label for="">Tanggal Pembelian</label>
                                <input type="date" name="tgl" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Jumlah Barang</label>
                                <input type="number" name="jml" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>
    </div>

                 <script src="/assets/js/jquery.min.js"></script>
                 <script src="/assets/js/bootstrap.bundle.js"></script>
                 <script src="/assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>