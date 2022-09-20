<?php
      if ( isset($_GET["nis"]) ){
            $nis = $_GET["nis"];
            $check_nis = "SELECT * FROM nilai WHERE nis = '$nis'; ";
            include('./input-config.php');
            $query = mysqli_query($mysqli, $check_nis);
            $row = mysqli_fetch_array($query);
      }
?>
<h1>Edit Data</h1>
<form action="siswa-edit.php" method="POST">
      <label for="nis">Nomor Induk Siswa :</label><br>
      <input value="<?php echo $row["nis"]; ?>" type="number" name="nis" placeholder="Ex. 12003102" readonly/><br>

      <label for="nama_lengkap">Nama Lengkap :</label><br>
      <input value="<?php echo $row["nama_lengkap"]; ?>" type="text" name="nama_lengkap" placeholder="Ex. Firdaus" /><br>
     
      <label for="kelas">Kelas :</label><br>
      <input value="<?php echo $row["kelas"]; ?>" type="text" name="kelas" placeholder="Ex. XI RPL 3" /><br>
     
      <label for="kehadiran"> Nilai kehadiran :</label><br>
      <input value="<?php echo $row["kehadiran"]; ?>" type="number" name="kehadiran" placeholder="Ex. 85" /><br>

      <label for="Tugas">Nilai Tugas :</label><br>
      <input value="<?php echo $row["Tugas"]; ?>" type="number" name="Tugas" placeholder="Ex. 78" /><br>

      <label for="UTS">Nilai UTS :</label><br>
      <input value="<?php echo $row["UTS"]; ?>" type="number" name="UTS" placeholder="Ex. 80" /><br>
    
      <label for="UAS">Nilai UAS :</label><br>
      <input value="<?php echo $row["UAS"]; ?>" type="number" name="UAS" placeholder="Ex. 82" /><br>
      <br>
      <input type="submit" name="edit" value="Edit Data" />
      <a href="siswa-nilai.php">Kembali</a>
</form>

<?php
      if ( isset($_POST["edit"]) ) {
            $nis = $_POST["nis"];
            $nama_lengkap = $_POST["nama_lengkap"];
            $kelas = $_POST["kelas"];
            $kehadiran = $_POST["kehadiran"];
            $Tugas = $_POST["Tugas"];
            $UTS = $_POST["UTS"];
            $UAS = $_POST["UAS"];

            // EDIT - Memperbaharui Data
            $query = "
                  UPDATE nilai SET nama_lengkap = '$nama_lengkap',
                  kelas = '$kelas',
                  kehadiran = '$kehadiran',
                  Tugas = '$Tugas',
                  UTS = '$UTS',
                  UAS = '$UAS'
                  WHERE nis = '$nis';
            ";
            
            include ('./input-config.php');
            $update = mysqli_query($mysqli, $query);

            if($update){
                  echo "
                        <script>
                        alert('Data berhasil diperbaharui');
                        window.location='siswa-tambah.php';
                        </script>
                  ";
            }else{
                  echo "
                        <script>
                        alert('Data gagal');
                        window.location='siswa-edit.php?nis=$nis';
                        </script>
                  ";
            }
      }
?>