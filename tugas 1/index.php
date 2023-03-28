<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PEGAWAI</title>
</head>
<body>
    <h2>DATA PEGAWAI</h2>
    <br>
    <table border="2" cellspacing="3" cellpadding="5" width="750">
        <tr>
            <th>nama</th>
            <th>nip</th>
            <th>noHp</th>
            <th>email</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi,"select*from pegawai");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nip']; ?></td>
                <td><?php echo $d['noHp']; ?></td>
                <td><?php echo $d['email']; ?></td>
            </tr>
            <?php
        }
    ?>
    </table>
</body>
</html>