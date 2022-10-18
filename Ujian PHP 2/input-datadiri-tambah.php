<div class="container">
<h1>Tambah Data</h1>
<form action="input-datadiri-tambah.php" method="POST">
<label for="nis">Nomor Induk Siswa :</label>
<input class="form-control" type="number" name="nis" placeholder="Ex. 12003102" /><br>

<label for="namalengkap">Nama Lengkap :</label>
<input class="form-control" type="text" name="namalengkap" placeholder="Ex. Maulana" /><br>

<label for="kelas">Kelas :</label>
<input class="form-control" type="text" name="kelas" /><br>

<label for="kehadiran">Nilai Kehadiran : </label><br>
<input class="form-control" type="number" name="kehadiran" placeholer="Ex. 80.56" />

<label for="tugas">Nilai Tugas : </label><br>
<input class="form-control" type="number" name="tugas" placeholer="Ex. 80.56" />

<label for="uts">Nilai UTS : </label><br>
<input class="form-control" type="number" name="uts" placeholer="Ex. 80.56" />

<label for="uas">Nilai UAS : </label><br>
<input class="form-control" type="number" name="uas" placeholer="Ex. 80.56" />

<input  class='btn btn-success btn-sm' type="submit" name="simpan" value="Simpan Data" />
<a  class='btn btn-primary btn-sm' href="input-datadiri.php">Kembali</a>
</form>

<?php
include ('./input-config.php');
if ($_SESSION["login"] != TRUE) {
    header('location:login.php');

}
if ($_SESSION["role"] != "walas") {
    echo "
    <script>
         alert('Kamu bukan walas !!!');
         window.location='input-datadiri.php';
         </script>
    ";
    }

 if(isset($_POST["simpan"])){
     $nis = $_POST["nis"];
     $namalengkap = $_POST["namalengkap"];
     $kelas = $_POST["kelas"];
     $kehadiran = $_POST["kehadiran"];
     $tugas = $_POST["tugas"];
     $uts = $_POST["uts"];
     $uas = $_POST["uas"];

    echo $nis . "<br>";
    echo $namalengkap . "<br>";
    echo $kelas . "<br>";
    echo $kehadiran . "<br>";
    echo $tugas . "<br>";
    echo $uts . "<br>";
    echo $uas . "<br>";

    // CREATE - Menambahkan Data ke Database
    $query = "
        INSERT INTO datadiri VALUES
        ('$nis', '$namalengkap', '$kelas', '$kehadiran', '$tugas', '$uts', '$uas');
    ";
    
    echo $query;
    
    $insert = mysqli_query($mysqli, $query);

    if ($insert){
        echo "
        <script>
         alert('Data berhasil ditambahkan');
         window.location='input-datadiri.php';
         </script>
        ";
    }
}
?>