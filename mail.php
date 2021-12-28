<?php
    $koneksi = mysqli_connect("localhost", "root", "", "phpdasar");
    // Check connection
    // if ($koneksi->connect_error) { 
    // die("Connection failed: " . $koneksi->connect_error);
    // }
    // echo "Connected successfully";

    if(isset($_POST['pencet'])) {
        mysqli_query($koneksi, "INSERT INTO contact_us SET 
        names = '$_POST[namanya]',
        email = '$_POST[email]'");

        echo "Thank you!";
    }
?>