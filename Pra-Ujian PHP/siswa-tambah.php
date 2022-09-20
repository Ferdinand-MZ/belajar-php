<h1>Tambah Data</h1>
<form action="siswa-tambah.php" method="POST">
      <label for="nis">Nomor Induk Siswa :</label><br>
      <input type="number" name="nis" placeholder="Ex. 12003102" /><br>

      <label for="nama_lengkap">Nama Lengkap :</label><br>
      <input type="text" name="nama_lengkap" placeholder="Ex. Firdaus" /><br>

      <label for="kelas">Kelas :</label><br>
      <input type="text" name="kelas" placeholder="Ex. XI RPL 3" /><br>

      <label for="kehadiran">Nilai Kehadiran:</label><br>
      <input type="number" name="kehadiran" placeholder="Ex. 81" /><br>
     
       <label for="Tugas">Nilai Tugas:</label><br>
      <input type="number" name="Tugas" placeholder="Ex. 85" /><br>
     
      <label for="UTS">Nilai UTS:</label><br>
      <input type="number" name="UTS" placeholder="Ex. 89" /><br>
     
      <label for="UAS">Nilai UAS:</label><br>
      <input type="number" name="UAS" placeholder="Ex. 87" /><br>
      
      <br>
      <input type="submit" name="simpan" value="Simpan Data" />
      <a href="siswa-nilai.php">Kembali</a>
</form>

<?php
      if( isset($_POST["simpan"]) ){
            $nis = $_POST["nis"];
            $nama_lengkap = $_POST["nama_lengkap"];
            $kelas = $_POST["kelas"];
            $kehadiran = $_POST["kehadiran"];
            $Tugas = $_POST["Tugas"];
            $UTS = $_POST["UTS"];
            $UAS = $_POST["UAS"];

            // CREATE - Menambahkan Data ke Database
            $query = "
                  INSERT INTO nilai VALUES
                  ('$nis', '$nama_lengkap', '$kelas', '$kehadiran', '$Tugas', '$UTS', '$UAS');
            ";

            include ('./input-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                  echo "
                        <script>
                              alert('Data berhasil ditambahkan');
                              window.location='siswa-nilai.php';
                        </script>
                  ";
            }

      }
?>