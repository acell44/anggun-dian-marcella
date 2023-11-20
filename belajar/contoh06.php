<html>
    <head>
        <title>Cpntoh 06</title>
    </head>
    <body>
    <?php

    $jumlah=5;
    $harga=20000;
    $total=$harga*$jumlah;
    $disc=$total*10/100;
    $jumbay=$total-$disc;

    echo"Jumlah Beli : $jumlah<br>";
    echo"Harga Barang = $harga<br>";
    echo"Total Bayar = $total<br>";
    echo"<hr><br>";
    echo"Discount = $disc <br>";
    echo"Jumlah Bayar = $jumbay <br>";
    
    ?>
</body>
</html>