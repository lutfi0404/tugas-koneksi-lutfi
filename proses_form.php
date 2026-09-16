<?php



 //pemanggilan koneksi

 include 'koneksi.php';



$nama= $_POST['nama'];
 $email=$_POST['email'];

 $jurusan=$_POST['jurusan'];


$query = INSERT INTO users (id, nama, email, jurusan) VALUES (NULL, '$nama', '$email', '$jurusan')";



 $proses = mysqli_query ($koneksi, $query);



 //pengecekan hasil eksekusi



if($proses) {

 echo "data berhasil di simpan";

}

 else {



echo "data gagal di simpan :" mysqli_error($koneksi);

 }

 ?>