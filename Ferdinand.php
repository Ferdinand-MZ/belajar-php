<?php
    echo "
        <marquee>
            <h1>Ferdinand Maulana Z.F. - murid</h1>
        </marquee>
";

    //Variable
    $nama = "Ferdinand Maulana Za Fauzi";
    $kelas = "XI RPL 2";
    $nilai = 82.58;

    echo "Nama : " . $nama;
    echo "<br>";
    echo "Kelas : " . $kelas;
    echo "Nilai : $nilai";

    //Operator Jumlah
    $angka1 = 5;
    $angka2 = 10;

    $hasil = $angka1 + $angka2;
    echo "Hasil dari penjumlahan : $hasil";

    // Rumus Luas Segitiga
    echo "<br><br>";
    $alas = 8;
    $tinggi = 20;

    $rumus = 0.5 * $alas * $tinggi;
    echo "Hasil rumus : $rumus";

    // Rumus Luas Lingkaran
    echo "<br><br>";
    $phi = 22/7;
    $r = 7;

    //luas ling : phi x r x r
    $lingkaran = $phi * $r * $r;
    echo "Hasil luas Lingkaran : $lingkaran";

    // Rumus Volume Balok
    echo "<br><br>";
    $p = 10;
    $l = 5;
    $t = 10;
    
    //Besar Volume Balok
    $volume = $p * $l * $t ;
    echo "Hasil Besar Volume Balok : $volume";

?>