<?php
require "koneksi.php";
require "function.php";

$siswa = query("SELECT*FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <br><br>
    <a href="tambah_siswa.php">
        TAMBAH DATA Siswa
    </a>
    <br><br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
        <tr>
<?php foreach($siswa as $s):?>
    <tr>
        <td><?=$s["Nama"];?></td>
        <td><?=$s["Kelas"];?></td>
    </tr> 
    <?php endforeach;?>
    
    </table>
</body>
</html>    