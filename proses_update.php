<?php
 if (isset($_POST['submit'])) {
  //Include file koneksi, untuk koneksikan ke database
  include 'koneksi.php';
  $no_transaksi=$_POST['no_transaksi'];
  $id_barang=$_POST['id_barang'];
  $id_kasir=$_POST['id_kasir'];
  $tgl_transaksi=$_POST['tgl_transaksi'];
  $total = $_POST['total'];
 
  $sql="UPDATE transaksi SET no_transaksi = '$no_transaksi', id_barang ='$id_barang', id_kasir ='$id_kasir', tgl_transaksi ='$tgl_transaksi' WHERE no_transaksi = '$no_transaksi'";
  $query = mysqli_query($koneksi, $sql);	

  if ($sql) {
    // pesan jika data berubah
    echo "<script>alert('Data transaksi berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data transaksi gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}