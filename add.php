<?php
 if (isset($_POST['submit'])) {
  //Include file koneksi, untuk koneksikan ke database
  include 'koneksi.php';
  $no_transaksi=$_POST['no_transaksi'];
  $tanggal_transaksi=$_POST['id_barang'];
  $jenis_transaksi=$_POST['id_kasir'];
  $nama_member=$_POST['tgl_transaksi'];
  

  // no_transaksi bernilai '' karena kita set auto increment
 
  $sql="insert INTO transaksi (no_transaksi,id_barang,id_kasir,tgl_transaksi) VALUES
  ('$no_transaksi', '$id_barang', '$id_kasir', '$tgl_transaksi')";
  $query = mysqli_query($koneksi, $sql);	
  
  if ($sql) {
    // pesan jika data tersimpan
    echo "<script>alert('Data transaksi berhasil ditambahkan'); 
	window.location.href='index.php'</script>"; 
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data transaksi gagal ditambahkan');
	window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}