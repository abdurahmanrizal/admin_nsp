<?php
    $server   = "localhost";
    $user     = "root";
    $passowrd = "";
    $nama_db  = "test_nsp";

    $db       = mysqli_connect($server,$user,$passowrd,$nama_db);

    if(!$db){
        die("Gagal terhubung dengan database: ".mysqli_connect_error());
    }

?>