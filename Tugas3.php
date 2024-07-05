<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<title></title>
<body>
<form action="Hasil3.php" method='post'>
<h2><center>Form Registrasi</center></h2>
<pre>
Isi Data Dibawah ini:
Nama                :<input type='text' name='nama'>
Alamat              :<textarea name='alamat' rows='5' cols='40'></textarea>
Tempat Lahir        :<input type='text' name='temlah'>
Tanggal Lahir       :<input type='date' name='tanglah'>
Jenis Kelamin       :<input type='radio' name='kelamin' value='Laki-laki'>Laki-laki <input type='radio' name='kelamin' value='Perempuan'>Perempuan
Pendidikan          :<select name='pendidikan'>
    <option value='-Pilih-'>
    <option value='SMP'>SMP
    <option value='SMA/SMK'>SMA/SMK
    <option value='D3'>D3
    <option value='S1'>S1
    <option value='S2'>S2
</select>
<p>
Hobi                :
<input type='checkbox' name='hobi1' value='olahraga'>olahraga
<input type='checkbox' name='hobi2' value='musik'>musik
<input type='submit' value='Submit'> <input type='reset' value='Cancel'>
</body>
</html>