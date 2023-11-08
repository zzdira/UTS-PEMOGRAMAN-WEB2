<?php
$produk = array(
    array("Minyak telon", 20, 30000),
    array("Diapers", 15, 51000),
    array("Baby Oil", 10, 16000),
    array("Shampo Baby", 18, 20000),
    array("Bedak", 15, 15000),
    array("Baju Bayi", 20, 35500),
    array("Jumper", 25, 50000)
);
?>

<h1 style="text-align: center;">Tabel Hitung Total Jumlah</h1>
<table style="margin: 0 auto;" border="1">
    <tr>
        <th>ID.</th>
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
        echo "<td>" . ($key + 1) . "</td>";
        echo "<td>" . $item[0] . "</td>";
        echo "<td>" . $item[1] . "</td>";
        echo "<td>Rp " . number_format($item[2]) . "</td>";
        echo "<td>Rp " . number_format($jumlah) . "</td>";
        echo "</tr>";
    }

    echo "<tr>";
    echo "<td colspan='4'>Total</td>";
    echo "<td>Rp " . number_format($total) . "</td>";
    echo "</tr>";
    echo "</table>";
    ?>
