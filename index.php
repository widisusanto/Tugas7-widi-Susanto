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
      <h3>Tabel Pelanggan (mysqli_fetch_array)</h3>
      <table>
         <thead>
            <tr>
               <th> No_pelanggan</th>
               <th> Pengirim</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM Pelanggan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['No_Pelanggan'] ?></td>
               <td><?php echo $row['Pengirim'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel penerima (mysqli_fetch_row)</h3>
      <table>
         <thead>
            <tr>
               <th>id_penerima</th>
               <th>No_Pelanggan</th>
               <th>NAMA</th>
               <th>Alamat</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM penerima';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Inner Join (mysqli_fetch_assoc)</h3>
      <h4> (menampilkan semua data pelanggan dari tabel pelanggan dari si penerima)</h4>
      <table>
         <thead>
            <tr>
               <th>No_Pelanggan</th>
               <th>id_penerima</th>
               <th>NAMA </th>
               <th>Alamat </th>
            </tr>
         </thead>
         <?php
            'SELECT *
            FROM Pelanggan 
            INNER JOIN penerima
            ON Pelanggan.No_Pelanggan = penerima.id_Penerima';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_assoc($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['No_Pelanggan'] ?></td>
               <td><?php echo $row['id_penerima'] ?></td>
               <td><?php echo $row['NAMA'] ?></td>
               <td><?php echo $row['Alamat'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
      </table>
      <h3>Left Outer Join </h3>
      <h4> (mampilkan semua data kendaraan dari tabel barang dari transaksi)</h4>
      <table>
         <thead>
            <tr>
               <th>No Invoice</th>
               <th>Tanggal</th>
               <th>No Polisi </th>
               <th>Tipe Motor</th>
               <th>Jenis Service</th>
               <th>Sisa Bayar </th>
            </tr>
         </thead>
         <?php
            'SELECT *
            FROM Pelanggan 
            INNER JOIN penerima
            ON Pelanggan.No_Pelanggan = penerima.id_penerima';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_assoc($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['No_Pelanggan'] ?></td>
               <td><?php echo $row['id_penerima'] ?></td>
               <td><?php echo $row['NAMA'] ?></td>
               <td><?php echo $row['Alamat'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
   </body>
</html>