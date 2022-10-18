<?php
include ('./input-config.php');
if ($_SESSION["login"] != TRUE) {
    header('location:login.php');
}

if(isset($_GET["nis"])){
    $nis = $_GET["nis"];
    $check_nis = "SELECT * FROM datadiri WHERE nis = '$nis';";
    $query = mysqli_query($mysqli, $check_nis);
    $row = mysqli_fetch_array($query);
}
?>

<div class='container'></div>
<h1>Edit Data</h1>
<form action="input-datadiri-edit.php" method="POST">
<label for="nis">Nomor Induk Siswa :</label>
<input  class="form-control" value="<?php echo $row["nis"]; ?>" type="number" name="nis" placeholder="Ex. 12003102" readonly /><br>

<label for="namalengkap">Nama Lengkap :</label>
<input  class="form-control" value="<?php echo $row["namalengkap"]; ?>" type="text" name="namalengkap" placeholder="Ex. Ferdinand Maulana" /><br>

<label for="kelas">Kelas</label>
<input  class="form-control" value="<?php echo $row["kelas"]; ?>" type="text" name="kelas"placeholder="Ex.11 rpl 2" /><br>

<label for="kehadiran">Nilai kehadiran : </label><br>
<input  class="form-control" value="<?php echo $row["kehadiran"]; ?>" type="number" name="kehadiran" placeholer="Ex. 80.56" />

<label for="tugas">Nilai Tugas : </label><br>
<input  class="form-control" value="<?php echo $row["tugas"]; ?>" type="number" name="tugas" placeholer="Ex. 80.56" />

<label for="uts">Nilai UTS : </label><br>
<input  class="form-control" value="<?php echo $row["uts"]; ?>" type="number" name="uts" placeholer="Ex. 80.56" />

<label for="nilai">Nilai UAS : </label><br>
<input  class="form-control" value="<?php echo $row["uas"]; ?>" type="number" name="uas" placeholer="Ex. 80.56" />

<input class='btn btn-success btn-sm' type="submit" name="edit" value="Edit Data" />
<a class='btn btn-primary btn-sm' href="input-datadiri.php">Kembali</a>
</form>

<?php

if(isset($_POST["edit"])){
     $nis = $_POST["nis"];
     $namalengkap = $_POST["namalengkap"];
     $kelas = $_POST["kelas"];
     $kehadiran = $_POST["kehadiran"];
     $tugas = $_POST["tugas"];
     $uts = $_POST["uts"];
     $uas = $_POST["uas"];

    // EDIT - Memperbaharui Data
    $query = "
        UPDATE datadiri SET namalengkap = '$namalengkap',
        kelas = '$kelas',
        kehadiran = '$kehadiran',
        tugas = '$tugas',
        uts = '$uts',
        uas = '$uas'
        WHERE nis = '$nis';
    ";
     
     $update = mysqli_query($mysqli, $query);

     if($update){
        echo "
        <script>
        alert('Data berhasil diperbaharui');
        window.location='input-datadiri.php';
        </script>
        
        ";
     }else{
        echo "
        <script>
        alert('Data berhasil diperbaharui');
        window.location='input-datadiri-edit.php?nis=$nis';
        </script>
        ";  
     }
}