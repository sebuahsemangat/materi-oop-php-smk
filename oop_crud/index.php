<?php
require_once 'siswa.php';
$siswa = new Siswa();
$dataSiswa = $siswa->ShowAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP PHP</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>

<hr>
<h2>Data Siswa</h2>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataSiswa as $siswa) : ?>
                <tr>
                    <td><?php echo $siswa['nis']; ?></td>
                    <td><?php echo $siswa['nama']; ?></td>
                    <td><?php echo $siswa['kelas']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</table>
</body>
</html>