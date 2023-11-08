<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<style type="text/css">
    .frame {
        border: solid 1px black;
        width: 500px;
        height: 300px;
    }    
    .frame table{
        margin: 10px;
    }

</style>

<body>

    <div class="frame">
<?php
$barang = array(
    array("Nama Produk" => "Pepsodent", "Stok" => 2, "Harga" => 10000),
    array("Nama Produk" => "Rinso", "Stok" => 3, "Harga" => 20000),
    array("Nama Produk" => "Dove", "Stok" => 2, "Harga" => 22000),
    array("Nama Produk" => "Downy", "Stok" => 2, "Harga" => 12000),


);

function hitungTotalJumlah($barang) {
    $totalJumlah = 0;
    foreach ($barang as $item) {
        $totalJumlah += $item['Stok'] * $item['Harga'];
    }
    return $totalJumlah;
}

$totalJumlah = hitungTotalJumlah($barang);

$diskon = 0;
if ($totalJumlah >= 100000) {
    $diskon = 0.2; // 20%
} elseif ($totalJumlah >= 50000) {
    $diskon = 0.1; // 10%
}

$totalBayar = $totalJumlah - ($totalJumlah * $diskon);

echo "<br>Tanggal Transaksi  : 08 November 2023<br>";
echo "<table border='0' cellpadding='7'cellspacing='0'>";
echo "<tr><td>Nama Produk </td>";

usort($barang, function($a, $b) {
    return strcmp($a['Nama Produk'], $b['Nama Produk']);
});

foreach ($barang as $item) {
    echo "<tr>";
    echo "<td>" . $item['Nama Produk'] ."  ". $item['Stok'] ."x".  $item['Harga'] ."</td>";
    echo "<td>:" .$item['Stok'] * $item['Harga']. "</td>";
    echo "</tr>";
}


echo "<td>Total Jumlah </td><td>:" . $totalJumlah . " Rupiah<br></td>";
echo "<tr><td>Diskon: <td>:" . ($diskon * 100) . "%<br>";
echo "<tr><td>Total Pembayaran: <td>:" . $totalBayar . " Rupiah";
echo "</table>";
?>

</div>

</body>
</html>