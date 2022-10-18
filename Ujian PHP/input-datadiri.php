<?php 
      include('./input-config.php');
      echo "<a href='input-datadiri-tambah.php'>Tambah Data</a>";
      echo "<hr>";
      // READ - Menampilkan data dari database
      $no = 1;
      $tabledata = "";
      $data = mysqli_query($mysqli, " SELECT * FROM transaksi ");
      while($row = mysqli_fetch_array($data)){
            $totalhargabeli =($row["qty"] * $row["hargabeli"]);
            $totalhargajual =($row["qty"] * $row["hargajual"]);
            $laba =($totalhargajual - $totalhargabeli);
            $presentase =($laba/$totalhargabeli)*100;
            $tabledata .= "
                  <tr>
                        <td>".$row["kodebarang"]."</td>
                        <td>".$row["tanggal"]."</td>
                        <td>".$row["pembeli"]."</td>
                        <td>".$row["namabarang"]."</td>
                        <td>".$row["qty"]."</td>
                        <td>".$row["hargabeli"]."</td>
                        <td>".$row["hargajual"]."</td>
                        <td>".$totalhargabeli."</td>
                        <td>".$totalhargajual."</td>
                        <td>".$laba."</td>
                        <td>".$presentase." % </td>
                        
                        <td>
                              <a href='input-datadiri-edit.php?kodebarang=".$row["kodebarang"]."'>Edit</a>
                              &nbsp;-&nbsp;
                              <a href='input-datadiri-hapus.php?kodebarang=".$row["kodebarang"]."' 
                              onclick='return confirm(\"Yakin ?\");'>Hapus</a>
                        </td>
                  </tr>
            ";
            $no++;
      }

      echo "
            <table cellpadding=5 border=1 cellspacing=0>
                  <tr>
                        <th>Kode Barang</th>
                        <th>Tanggal</th>
                        <th>pembeli</th>
                        <th>nama barang</th>
                        <th>qty</th>
                        <th>harga beli</th>
                        <th>harga jual</th>
                        <th>Total Harga Beli</th>
                        <th>Total Harga Jual</th>
                        <th>Laba</th>
                        <th>Presentase</th>
                        <th>Aksi</th>
                  </tr>
                  $tabledata
            </table>
      ";
?>
