<?php

$username = "root";
$password = "";
$hostname = "localhost";
$db= mysqli_connect($hostname,$username,$password);
mysqli_select_db($db,"data");


$query = "SELECT * FROM mhs";
$hasil = mysqli_query($db, $query);

echo "<table border = '1'>";
echo "<tr><td>NIM</td>
        <td>Nama Mahasiswa</td>
        <td>Alamat</td>
        <td>Kelamin</td>
        <td>Tgl Lahir</td>
        <td>Action</td></tr>";
        while ($data=mysqli_fetch_array($hasil)){

    echo "<tr><td>".$data['nim']."</td>
        <td>".$data['nama']."</td>
        <td>".$data['alamat']."</td>
        <td>".$data['kelamin']."</td>
        <td>".$data['tgl_lahir']."</td>
        <td> <a href='edit.php?nim=".$data['nim']."'>Edit</a></td>";
        }
        echo "</table>";
?>