<?php
    $conn = mysqli_connect("localhost", "root", "", "managemen_jahit");
         
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
     
    // Taking all 5 values from the form data(input)
    $nama =  $_REQUEST['nama'];
    $alamat = $_REQUEST['alamat'];
    $jumlah =  $_REQUEST['jumlah'];
    $pemabayaran = $_REQUEST['pembayaran'];
    $tanggal = $_REQUEST['tanggal'];
    $waktu = $_REQUEST['waktu'];
     
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO pemesanan(nama, alamat, jumlah, pembayaran)  VALUES ('$nama',
        '$alamat','$jumlah','$pemabayaran')";
    

    if(mysqli_query($conn, $sql)){
        $id_pembeli = mysqli_insert_id($conn);
        $sql1 = "INSERT INTO jadwal_pertemuan(id_pembeli, tanggal, waktu)  VALUES ('$id_pembeli','$tanggal','$waktu')"; 
        if (mysqli_query($conn, $sql1)){
            echo "Berhasil menambahkan data";
        } else{
            echo "apa yang terjadi";
        };
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    
    // // Close connection
    mysqli_close($conn);
?>