<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak Data Tamu</title>
</head>
<body>
    <center>
    <h2>Laporan Data Tamu</h2>
    <table border="1">
        <thead>
            <th>No</th>
            <th>No KTP</th>
            <th>No HP</th>
            <th>Nama</th>
            <th>Alamat</th>
        </thead>
        <tbody>
            <?php
            include '../koneksi.php';
            $sql=mysqli_query($config,"SELECT * FROM tamu");
            $nomor = 1;
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $data['noktp']; ?></td>
                    <td><?php echo $data['nohp']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
    </center>
    <script>
        window.print();
    </script>
</body>
</html>