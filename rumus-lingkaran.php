<form action="rumus-lingkaran.php" method="POST">
    <h1>Rumus Luas dan Keliling Lingkaran</h1>
    <p>Diameter :</p>
    <input type="number" name="dm" placeholder="Ex.5" />
    
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
    if(isset ($_POST["proses"])){
        
        if(14 % 2 == 0){
            $phi = 22/7;
        }else{
            $phi = 3.14;
        }

        echo "<hr>";
        $dm = $_POST["dm"];
        $jr = $dm / 2;
        $luas = $phi * ($jr * $jr);
        $keliling = $phi * 2 * $jr;

        echo "Diameter : $dm <br>";
        echo "Jari-jari : $jr <br>";
        echo "Luas Persegi Panjang : $luas <br>";
        echo "Keliling Persegi Panjang : $keliling <br>";
    }

?>