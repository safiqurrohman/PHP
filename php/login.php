<?php

session_start();
require "koneksi.php";

if(isset($_POST["login"])){

   $username=$_POST["username"];
   $password=$_POST["password"];

   $result = mysqli_query($koneksi, "SELECT * FROM solo WHERE username = '$username'");

 
 //cek username apakah ada di dalam tabel datauser
   if(mysqli_num_rows($result) === 1 ){

        //cek password apakah ada dalam database
        $row = mysqli_fetch_assoc($result); //ambil data jika username ada di dalam datauser
     
        //mengecek password deengan menggunakan password_verify yang di kembalikan dari paswsord_hash
        if( password_verify($password , $row["password"]) ){
            //cek sesionnya
            $_SESSION["login"] = true;

            //redirect
            header("location: homepage.php");
           exit;
        }
   }

   $error = true;
 

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>form login</title>
</head>
<body>

    <video  autoplay loop muted plays-inline class="back-video">
        <source src="../../properti/bg1.mp4" type="video/mp4">
    </video>
    <div class="wrapper">
        <div class="form-box">
                <form action="#" method="post">
                    <h2>Log in</h2>
                        <?php if(isset($error)) : ?>
                            
                            <p style="color: red; "> username atau password salah</p>
                        <?php endif; ?>        
                    <div class="inputbox">
                        <span class="details">username</span>
                        <div class="input">
                            <input name="username" type="text" placeholder="Masukkan username" required>
                            <ion-icon name="mail"></ion-icon>
                        </div>
                        
                    </div>
                    <div class="inputbox">
                        <span class="details">Password</span>
                        <div class="input">
                            <input name="password" type="password" placeholder="Masukkan Password" required>
                            <ion-icon name="key"></ion-icon>                    
                        </div>
                    </div>
                    <div class="forget">
                        <label ><input class="input-foget" type="checkbox" required>Remember Me</label>
                        <a href="#">Lupa password</a>
                    </div>
                    <div class="button">
                        <button name="login" type="submit" >Log in</button>
                   </div>
                    
                    <div class="register">
                        <p>Belum memiliki  akun? <a href="daftar.php">Daftar</a></p>
                    </div>
                </form>
        </div>      
    </div>
    
    <!--link untuk menggunakan icon-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>