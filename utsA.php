<?php
//Tabel Jumlah

$produk = array(
    array("Pepsodent", 30, 10000),
    array("Sunlight", 15, 11000),
    array("Baygon", 10, 16000),
    array("Dove", 20, 22000),
    array("Rinso", 20, 20000),
    array("Downy", 15, 12000),
    array("Le Mineral", 25, 5000)
);


?>
<h1 style="text-align: center;">Tabel Harga Barang</h1>
<table style=" margin: 0 auto;">
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>
<?php

$total = 0;
foreach ($produk as $key => $item) {
    $jumlah = $item[1] * $item[2];
    $total += $jumlah;
    echo "<tr>";
    echo "<td>" . ($key+1) . "</td>";
    echo "<td>" . $item[0] . "</td>";
    echo "<td>" . $item[1] . "</td>";
    echo "<td>" . $item[2] . "</td>";
    echo "<td>" . $jumlah . "</td>";
    echo "</tr>";
}

echo "<tr>";
echo "<td colspan='4'>Total</td>";
echo "<td>" . $total . "</td>";
echo "</tr>";
echo "</table>";

?>