<?php

 $koneksi = new mysqli('localhost','root','safikur1234','db_solo');

 if(!$koneksi){
    
     die(mysqli_error($koneksi));

 }


 function registrasi($data){
    global $koneksi;

    $namauser = $data["namauser"];
    $alamat = $data["alamat"];
    $tanggallahir = $data["tanggallahir"];
    $username = strtolower(stripslashes($data["username"]) );
    $email = $data["email"];
    $telpon = $data["telpon"];
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
    $client = $data["client"];

    //apakah username sudah ada atau belum ada
    $result=mysqli_query($koneksi, "SELECT username FROM solo WHERE username = '$username'");

    //cek username apakah usdah terdaftar
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username yang anda masukkan sudah terdaftar');
                </script>";

                return false;
    }
   
    //cek apakah konfirmasi password sama dengan password

    if($password !== $password2){
        echo "<script>
                alert ('konfirmasi password salah');
              </script>";
            
            return false;
    }

    //enkripsi password / mengamankan password
    //md5 jangan menggunakan cara enkripsi dengan menggunakan md5
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql="insert into `solo` (namauser,alamat,tanggallahir,username,email,telpon,password,password2,client) values('$namauser','$alamat','$tanggallahir','$username','$email','$telpon','$password','$password2','$client')";
    $result=mysqli_query($koneksi,$sql);


    return mysqli_affected_rows($koneksi);
 }

?>