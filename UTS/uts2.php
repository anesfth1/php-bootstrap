<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Pembelian Barang</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="lth.php">Smk Assalaam</a>
  <a class="navbar-brand" href="login.php">Home</a>
  <a class="navbar-brand" href="login.php" align="rigth">Logout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
</head>
<body>

            <?php
               if (isset($_POST['simpan'])) {
               $jml_form=$_POST['jml'];
               $nama = $_POST['nama'];
               $alamat =  $_POST['alamat'];
               $jeniskel = $_POST['kelamin'];
               $tgl_pem = $_POST['tgl'];   
            ?>    
    <div class="container">
        <div class="row" style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Masukan Data</div>
                        <div class="card-body">
                           <form action="uts3.php" method="post">
                    <?php for ($a=1; $a <= $jml_form; $a++) {?>
                        <div class="form-group">
                           <label for="">Nama Barang</label>
                           <input type="text" name="brg[]" class="form-control" required>
                        </div>
                        <div class="form-group">
                           <label for="">Kode Barang</label>
                           <input type="type" min="1" max="5" name="kbrg[]" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="">Jenis Barang</label>
                           <select name="jenis[]" class="form-control">
                           <option value="">Pilih</option>
                           <option value="Makanan">Makanan</option>
                           <option value="Minuman">Minuman</option>
                           <option value="Pakaian">Pakaian</option>
                           <option value="Laptop">Laptop</option>
                           <option value="Alat Serbaguna">Alat Serbaguna</option></select>
                        </div>
                        <div class="form-group">
                           <label for="">Jumlah Barang</label>
                           <input type="number" min="1" name="barang[]" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="">Harga Barang</label>
                           <input type="number" min="1" name="harga[]" class="form-control">
                        </div>
                        ___________________________________________________________________________________________________________________
                 <?php } ?>
                           <input type="hidden" name="nama" value="<?php echo $nama ?>">
                           <input type="hidden" name="alamat" value="<?php echo $alamat ?>">
                           <input type="hidden" name="kelamin" value="<?php echo $jeniskel ?>">
                           <input type="hidden" name="tgl" value="<?php echo $tgl_pem ?>">
                           <input type="hidden" name="jml" value="<?php echo $jml_form ?>">
                           <input type="submit" name="simpan"  value="simpan">
                           <hr>
                          </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
                     <?php } ?>

                   <script src="/assets/js/jquery.min.js"></script>
                   <script src="/assets/js/bootstrap.bundle.js"></script>
                   <script src="/assets/js/bootstrap.bundle.min.js"></script>  
</body>
</html>