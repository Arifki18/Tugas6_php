<?php

include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Data Barang</title>
</head>
<body>
    <h2>Data Barang</h2>
    <table border="1" style="width:100%">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Stok Barang</th>
            <th>Kode Barang</th>
            <th>Aksi</th>
        </tr>
     
        <?php while( $row = $result->fetch_assoc() ) : ?>
        <tr>
            <td> <?= htmlspecialchars($row['no']) ?> </td>
            <td> <?= htmlspecialchars($row['nama barang']) ?> </td>
            <td> <?= htmlspecialchars($row['jumlah barang']) ?> </td>
            <td> <?= htmlspecialchars($row['stok barang']) ?> </td>
            <td> <?= htmlspecialchars($row['kode barang']) ?> </td>
            <td>
                <a href="edit.php?id=<?= htmlspecialchars($row['id']) ?>">Edit</a>
                <a href="delete.php?id=<?= htmlspecialchars($row['id']) ?>" onclick="return confirm('Yakin?')">Delete</a>
            <!-- added missing id parameters and added confirmation for delete action -->
            </td>
        </tr>
        <?php endwhile; ?>

    </table>
    <br>
    <h2>Tambah Barang</h2>
    <form action="insert.php" method="POST">
        No: <input type="text" name="no" required><br>
        Nama Barang: <input type="text" name="nama_barang" required><br>
        Jumlah Barang: <input type="number" name="jumlah_barang" required><br>
        Stok Barang: <input type="number" name="stok_barang" required><br>
        Kode Barang: <input type="text" name="kode_barang" required><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>