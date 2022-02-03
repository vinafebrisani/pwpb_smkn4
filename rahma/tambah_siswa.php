<?php
require "function.php";
if (isset($POST["submit"]) ) {
    if(tambah_siswa($_POST)>0) {
        echo"
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'siswa.php';
        </script>
        ";
    }else {
        echo"
        <script>
            alert('Data Gagal Ditambahkan');
            document.location.herf='tambah_siswa.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Siswa</title> 
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="l nama">NAMA: </label>
                <input type="text"name="kel" id="l nama" required>
            </li>                    
            <li>
                <label for="l kelas">KELAS:</label>
                <input type="text"name="kel" id="l kelas" required>
            </li>
            <li>
                <button type="submit" name="submit">
                    Tambah Data
                </button>
            </li>
        </ul>
    </form>
</body>
</html>                    