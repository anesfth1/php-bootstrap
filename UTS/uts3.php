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
		
			$nama =$_POST['nama'];
			$alamat=$_POST['alamat'];
			$kel=$_POST['kelamin'];
			$tgl=$_POST['tgl'];
			$jumlah=$_POST['jml'];
			
			$brg=$_POST['brg'];
			$kode=$_POST['kbrg'];
			$jenis=$_POST['jenis'];
			$harga=$_POST['harga'];
			$barang=$_POST['barang'];
			$total=$_POST['total'];
			$sub_total=0;
	
			
			?>	

			<html>
			<head>
				<title></title>
			</head>
			<body>

			<h1 align="center">Pembayaran Barang </h1>
			<table border="" align="center" width="94%" bgcolor="#ffffff" > 
			<tr align="center">

				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal</th>
				<th colspan="4">Jumlah Barang</th>

			</tr>
			<tr>
				<td align="center"><?php  echo "$nama"; ?></td>
				<td align="center"> <?php  echo "$alamat"; ?></td>
				<td align="center"><?php  echo "$kel"; ?></td>
				<td align="center"><?php  echo "$tgl"; ?></td>
				<td align="center" colspan="4"><?php  echo "$jumlah"; ?></td>
			</tr>
			<tr align="center">
				<th colspan="7">Daftar Barang Yang Dibeli</th>
			</tr>
			<tr align="center">
                    <th>No</th>
					<th rowspan="">Nama Barang</th>
					<th rowspan="">Kode Barang</th>
					<th>Jenis<br>Barang</th>
					<th>Jumlah<br>Barang</th>
					<th>Harga Satuan<br>(Rp)</th>
					<th>Total<br>Harga</th>
			</tr>

				<?php 
						$i=1;	
						$subtotal=0;
				for ($key=0; $key < count($harga); $key++) { 
					$total=$barang[$key]*$harga[$key];
					$subtotal=$subtotal+$total;
					?>
                    
						<tr>
						    <td align="center"><?php echo $i++; ?></td>
							<td align="center"><?php echo "$brg[$key]";?></td>
							<td align="center"><?php echo "$kode[$key]";?></td>
							<td align="center"><?php echo "$jenis[$key]";?></td>
							<td align="center"><?php echo "$barang[$key]";?></td>
							<td align="center"><?php echo "$harga[$key]";?></td>
							<td align="center"><?php echo "$total";?></td>

						</tr>

						<?php 
						
						 } 
						 	if ($subtotal >= 150000) {
								 $jum =$subtotal*0.5;
								 $Diskon="5%";
						 	}
						 	if ($subtotal >= 250000) {
								  $jum=$subtotal*0.10;
								  $Diskon="10%";
                             }
                            if ($subtotal >= 500000) {
								 $jum=$subtotal*0.20;
								 $Diskon="20%";
                            }else{
						 		$Diskon="0%";
						 		$jum =0;
						 	}
						 	$hasil=$subtotal-$jum;
						 
						 ?>
						<tr align="center">
							<th colspan="7">Total Pembayaran</th>
						</tr>
						<tr>
							<th align="left" colspan="5">Sub Total</th>			
                            <th colspan="2"><?php echo "Rp.". "$subtotal"; ?></th>
						</tr>
						<tr>
							<th align="left" colspan="5">Diskon <?php echo "("."$Diskon".")"; ?> </th>
                            <th colspan="2"><?php  echo  "Rp.$jum"; ?></th>
						</tr>
						<tr>
							<th colspan="5"  align="left">Total </th>
							<th colspan="2"><?php  echo "Rp."."$hasil"; ?></th>
						</tr>

			</table>
			<form action="bayar.php" method="post">
			<br>
			<table> 
						<tr> 
								<td> masukan uang pembayaran</td>
								<td> <input type="text" name="pem"></td>
								<td> <button name="bayar"> Bayar </button></td>
						</tr>
			</table>
	        </form>

			<?php
                               }
					if (isset($_POST['bayar'])) {
						$pem =['pem'];
						var_dump('$pem');
						echo "uang pembayaran anda : $pem"; 	
					 } 
					 
			 ?>  
			 <script src="/assets/js/jquery.min.js"></script>
                   <script src="/assets/js/bootstrap.bundle.js"></script>
                   <script src="/assets/js/bootstrap.bundle.min.js"></script>  
			 </body>
</html>