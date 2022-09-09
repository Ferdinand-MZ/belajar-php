<form action="rumus-persegipanjang.php" method="POST">
    <h1>RUMUS LUAS DAN KELILING PERSEGI PANJANG</h1>
    <P>HITUNG</P>
    <input type="number" name="panjang" placeholder="Ex. 5"/> <br>
    <input type="number" name="lebar" placeholder="Ex. 5"/> <br>
    <input type="submit" name="proses" value="hitung luas dan keliling"/> 
</form>

<?php 
    if(isset($_POST["proses"])) {
        echo "<hr>";
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas = $panjang * $lebar;
        $keliling = $panjang + $lebar + $panjang + $lebar;

        echo "panjang : $panjang <br>";
        echo "lebar : $lebar <br>";
        echo "luas : $luas <br>";
        echo "keliling : $keliling <br>";

    }     
?>