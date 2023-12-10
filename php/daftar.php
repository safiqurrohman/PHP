<?php

require "koneksi.php";

if(isset($_POST["daftar"])){

    if( registrasi($_POST) > 0){
        echo "<script>
                alert('user telah berhasil di tambahkan');
              </script>";
    }else{
        echo mysqli_error($koneksi);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="daftar.css">
    <title>Daftar</title>
</head>
<body>
    <video  autoplay loop muted plays-inline class="back-video">
        <source src="../../properti/bg1.mp4" type="video/mp4">
    </video>
    <div class="wrapper">
        <div class="form-box">
            <form action="#" method="POST">
                <h2>Register</h2>
                <div class="box-detail">
                    <div class="input-user">
                        <label >Nama lengkap</label>
                        <span class="icon-left">
                            <ion-icon name="person"></ion-icon>
                        </span>
                        <input name="namauser" type="text" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="input-user">
                        <label >Alamat</label>
                        <span class="icon">
                            <ion-icon name="map"></ion-icon>
                        </span>
                        <input name="alamat" type="text" placeholder="Masukkan alamat lengkap" required>
                    </div>
                    <div class="input-user">
                        <label >Tanggal lahir</label>
                        <span class="icon"-left>
                            
                        </span>
                        <input name="tanggallahir" class="date" type="date"  required>
                    </div>
                    <div class="input-user">
                        <label >Username</label>
                        <span class="icon">
                            <ion-icon name="person"></ion-icon>
                        </span>
                        <input name="username" type="text" placeholder="Masukkan username" required>
                    </div>
                    <div class="input-user">
                        <label >Alamat Email</label>
                        <span class="icon-left">
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <input name="email" type="email" placeholder="Masukkan email" required>
                    </div>
                    <div class="input-user">
                        <label >No.telpon</label>
                        <span class="icon">
                            <ion-icon name="call"></ion-icon>
                        </span>
                        <input name="telpon" type="number" placeholder="Masukkan No.telepon" required>
                    </div>
                    <div class="input-user">
                        <label >Password</label>
                        <span class="icon-left">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input name="password" type="password" placeholder="Masukkan password" required>
                    </div>
                    <div class="input-user">
                        <label >Ulangi password</label>
                        <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input name="password2" type="password" placeholder="Ulangi password" required>
                    </div>
                    <div class="input-user">
                        <label >pilihan</label>
        
                        <input name="client" type="text" placeholder="tipe" required>
                    </div>

                    <div class="input-user">
                        <button name="daftar" type="submit" class="btn">Daftar</button>
                    </div>
                </div>
                <div class="login">
                    <p>Sudah memiliki  akun? <a href="login.php">Login</a></p>
                </div>
                
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>