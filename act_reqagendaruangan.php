<?php

require_once('./index_files/conndb3.php');

    if (isset($_POST['submit'])) {
        $nama	            = ($_POST['nama']);
        $keperluan		    = ($_POST['keperluan']);
        $telp		        = ($_POST['telp']);
        $ruangan            = ($_POST['ruangan']);
        $tanggal            = ($_POST['tanggal']);
        $waktu              = ($_POST['waktu']);
        $status             = ($_POST['status']);
    
        if ($nama == '' or $telp == '' or $keperluan == '') {
            $eror		= "Silahkan masukan semua data yakni data isi dan nama";
        }

        if (empty($eror)) {
            $query	 	= "INSERT INTO t_pinjam (nama, keperluan, telp, id_ruangan, tanggal, waktu, status) VALUES ('$nama', '$keperluan', '$telp', '$ruangan', '$tanggal', '$waktu', '$status')";
            $result = mysqli_query(connection(), $query);
    
            if ($result) {
                echo"<script>alert('Data berhasil ditambahkan'); window.location='status.php';</script>";
            } else {
                echo"<script>alert('Data gagal ditambahkan'); window.location='add_agendaruangan.php.php';</script>";
            }
        }
        // header('Location: status.php?status='.$status);
    } // END CREATE LOGIC
