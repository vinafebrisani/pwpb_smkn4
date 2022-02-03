<?php require "koneksi.php";

function query($query){

    global $db;
    $result=mysqli_query($db,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[] =$row;
    }
    return $rows;
    
}



function tambah_siswa($data){
    global $db;
    $na=$data["ma"];
    $las=$data["kel"];

    $tambah="INSERT INTO siswa VALUES(
        '',
        '$na',
        '$las'
        )";

        mysqli_query($db,$tambah);
        return mysqli_affected_rows($db);
    }
?>    
