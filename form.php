<!DOCTYPE html>

 <html lang="en">

 <head>

<meta charset="UTF-8">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <title>Form untuk input data siswa </title>

 </head>

 <body>

<form action="proses_form.php" method="post">

 <table>







<tr>

<td>Nama lengkap</td>

<td><input type="text" name="nama" id="nama" placeholder="masukkan nama" required></td>



</tr>







<tr>

<td>Email</td>

<td><input type="email" name="email" id="email" placeholder="masukkan alamat email" required></td>
 </tr>
<tr>


<td>Jurusan</td>






<td>

<Select name="jurusan">

<option value="rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>

<option value="Akutansi">Akutansi</option>



<option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>

</Select>

 </td>

 </tr>

 <tr>



<td>



<input type="submit" value="Register">



</td>



</tr>

 </table>

 </form>

 </body>

 </html>