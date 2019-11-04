<html>
<head>
<title>Keluarga</title>
</head>
<body>
  <FORM ACTION="" METHOD="GET">
      <fieldset>
          <legend</legend>
          <table>
          <tr>
             <td>Masukan Jumlah Keluarga :<input type="number" name="a"></td>
             <td><input type="submit" name="Simpan" value="Simpan"></td>
          </tr>
</FORM>
<FORM ACTION="soal2.php" METHOD="POST">
<?php
  if (isset($_GET['Simpan'])) {
    $a = $_GET['a'];
    for ($i=0; $i < $a ; $i++) { 
        
        ?>
  <table>
      <tr>
         <td>Nama : </td>
         <td><input type="text" name="nama[]"></td>
         <td>NIK : </td>
         <td><input type="number" name="nik[]"></td>
         <td>Alamat : </td>
         <td><input type="text" name="alamat[]"></td>
         <td>Umur : </td>
         <td><input type="number" name="umur[]"></td>
      </tr>
  </table>   
  <?php   
  }
  ?>
  <table>
      <tr>
        <button name="input">Simpan</button>
        <button name="reset">Reset</button>
      </tr>
  </table>
  <?php
}
?>
</FORM>
</body>
</html>