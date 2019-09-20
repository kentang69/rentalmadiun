<?php
if(isset($_POST['login'])){
  //inlcude configurasi koneksi
 include('../AdminLokasiRental/proses/config.php');
  //menangkap data dari tambah.php
  $id = $_POST['id_rental'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  
 
  //qwey menympan datanya
  $user = mysqli_query($koneksi, "select * from tb_admin where username='$username' and password='$password'") or die (mysqli_error($koneksi));
  $chek = mysqli_num_rows($user);
  if($chek>0){  
     
  while ($data = mysqli_fetch_assoc($user)) 
  {
   $id = $data['id_admin']; 
   $update = mysqli_query($koneksi, "UPDATE tb_admin SET status='online' where id_admin='$id'");

  }
  header("location:../AdminLokasiRental/index.php");

   }else{
    header("location:login.html");
   }

}else{ 

 
 echo '<script>window.history.back()</script>';

}
?>