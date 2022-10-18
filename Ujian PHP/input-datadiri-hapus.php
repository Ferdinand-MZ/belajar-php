<?php
      if ( isset($_GET["kodebarang"]) ){
            $kodebarang = $_GET["kodebarang"];

            $query = "
                  DELETE FROM transaksi
                  WHERE kodebarang = '$kodebarang';
            ";
            
            include ('./input-config.php');
            $delete = mysqli_query($mysqli, $query);

            if($delete){
                  echo "
                        <script>
                        alert('Data berhasil dihapus');
                        window.location='input-datadiri.php';
                        </script>
                  ";
            }else{
                  echo "
                        <script>
                        alert('Data gagal');
                        window.location='input-datadiri.php';
                        </script>
                  ";
            }
      }
?>