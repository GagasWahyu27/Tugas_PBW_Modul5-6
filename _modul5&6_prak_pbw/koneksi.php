<?php
    $koneksi = mysqli_connect("localhost", "root", "", "akademik_prakpbw");

    if(mysqli_connect_error())
    {
        echo "koneksi error". mysqli_connect_error();
    }
?>