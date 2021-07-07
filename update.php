<?php

// cek no_transaksi
if (isset($_GET['no_transaksi'])) {
  include 'koneksi.php';
  $no_transaksi = $_GET['no_transaksi'];
 
  // ambil data berdasarkan no_transaksi
  $sql="SELECT * FROM transaksi WHERE no_transaksi ='$no_transaksi'";
  //$no=1;
  $query = mysqli_query($koneksi, $sql);		
  while ($row = mysqli_fetch_array($query))
  {
  ?>

  <h2>Halaman Update Data</h2>

  <form method="post" action="proses_update.php">
    <input type="varchar" name="no_transaksi" value="<?php echo $row['no_transaksi']?>">
    <input type="varchar" name="id_barang" value="<?php echo $row['id_barang'] ?>">
    <input type="varchar" name="id_kasir" value="<?php echo $row['id_kasir'] ?>">
    <input type="varchar" name="tgl_transaksi" value="<?php echo $row['tgl_transaksi'] ?>">
    <input type="submit" name="submit" value="Update Data">
  </form>

  <?php
 
}}
