<form action="rumus-balok.php" method="POST">
    <h1>RUMUS VOLUME BALOK</h1>
    <P>HITUNG</P>
    <input type="number" name="panjang" placeholder="Ex. 5"/> <br>
    <input type="number" name="lebar" placeholder="Ex. 5"/> <br>
    <input type="number" name="tinggi" placeholder="Ex. 5"/> <br>
    <input type="submit" name="proses" value="volume"/> 
</form>

<?php 
    if(isset($_POST["proses"])) {
        echo "<hr>";
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $tinggi = $_POST["tinggi"];
        $volume = $panjang * $lebar * $tinggi;
        

        echo "volume : $volume ";
    }     
?>