<?php 
      include('./input-config.php');
      echo "<a href='siswa-tambah.php'>Tambah Data</a>";
      echo "<hr>";
      // READ - Menampilkan data dari database
      $no = 1;
      $tabledata = "";
      $data = mysqli_query($mysqli, " SELECT * FROM nilai ");
      while($row = mysqli_fetch_array($data)){
            $nilai_akhir=($row["kehadiran"]+$row["Tugas"]+$row["UTS"]+$row["UAS"])/4;
            $tabledata .= "
                  <tr>
                        <td>".$row["nis"]."</td>
                        <td>".$row["nama_lengkap"]."</td>
                        <td>".$row["kelas"]."</td>
                        <td>".$row["kehadiran"]."</td>
                        <td>".$row["Tugas"]."</td>
                        <td>".$row["UTS"]."</td>
                        <td>".$row["UAS"]."</td>
                        <td>".$nilai_akhir."</td>
                        <td>
                              <a href='siswa-edit.php?nis=".$row["nis"]."'>Edit</a>
                              &nbsp;-&nbsp;
                              <a href='siswa-hapus.php?nis=".$row["nis"]."' 
                              onclick='return confirm(\"Yakin Dek ?\");'>Hapus</a>
                        </td>
                  </tr>
            ";
            $no++;
      }

      echo "
            <table cellpadding=5 border=1 cellspacing=0>
                  <tr>
                        <th>nis</th>
                        <th>nama</th>
                        <th>kelas</th>
                        <th>Nilai Kehadiran</th>
                        <th>Tugas</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>nilai akhir</th>
                        <th>Aksi</th>
                  </tr>
                  $tabledata
            </table>
      ";
?>
