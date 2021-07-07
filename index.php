<html>
   <head>
      <title>Menampilkan Data Tabel MySQL Dengan mysqli_fetch_array</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <h3>CRUD dengan PHP MySQL</h3>
      <form method="post" action="add.php">
    <input type="varchar" name="no_transaksi" placeholder="No transaksi">
    <input type="varchar" name="id_barang" placeholder="ID Barang">
    <input type="varchar" name="id_kasir" placeholder="ID Kasir">
    <input type="varchar" name="tgl_transaksi" placeholder="Tanggal Transaksi">
    <input type="submit" name="submit" value="Tambah Data">
         </form><br/>
      <h3>Tabel Barang (mysqli_fetch_array)</h3>
      <table>
         <thead>
            <tr>
               <th>id barang</th> 
               <th>nama barang</th>   
               <th>stok barang</th>           
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM barang';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_barang'] ?></td>
               <td><?php echo $row['nama_barang'] ?></td>
               <td><?php echo $row['stok_barang'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel kasir (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>Id kasir</th>
               <th>nama kasir</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM kasir';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
      <h3>Tabel transaksi (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>No transaksi</th>
               <th>id barang</th>
               <th>id kasir</th>
               <th>tanggal transaksi</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM transaksi';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><a href="update.php?no_transaksi=<?php echo $row['no_transaksi'] ?>">Update</a></td>
               <td><a href="delete.php?no_transaksi=<?php echo $row['no_transaksi'] ?>"
               onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
 <h3>Inner Join (mysqli_fetch_assoc)</h3>
      <h4> (menampilkan semua data barang dari tabel barang yang melakukan transaksi)</h4>
      <table>
         <thead>
            <tr>
               <th>id barang</th>
               <th>no transaksi</th>
               <th>tanggal transaksi</th>
            </tr>
         </thead>
         <?php
            'SELECT *
            FROM barang 
            INNER JOIN transaksi
            ON barang.id_barang = transaksi.no_transaksi';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_assoc($query))
            {
               ?>
         <tbody>
            <tr>
               <td><?php echo $row['id_barang'] ?></td>
               <td><?php echo $row['no_transaksi'] ?></td>
               <td><?php echo $row['tgl_transaksi'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
      </table>
      <h3>Left Outer Join </h3>
      <h4> (menampilkan semua data barang dari tabel barang yang melakukan transaksi)</h4>
      <table>
         <thead>
            <tr>
               <th>id barang</th>
               <th>no transaksi</th>
               <th>tanggal transaksi</th>
            </tr>
         </thead>
         <?php
            'SELECT *
            FROM barang 
            LEFT JOIN transaksi
            ON member.id_barang = transaksi.no_transaksi';
            $query = mysqli_query($koneksi, $sql);    
            while ($row = mysqli_fetch_assoc($query))
            {
               ?>
         <tbody>
            <tr>
              <td><?php echo $row['id_barang'] ?></td>
               <td><?php echo $row['no_transaksi'] ?></td>
               <td><?php echo $row['tgl_transaksi'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
   </body>
</html>