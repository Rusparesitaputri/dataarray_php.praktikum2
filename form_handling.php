<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftran Mahasiswa STTNF</h1>
   <form action="belajar_post.php" method="POST">
    
    <label for="">Nama Mahasiswa</label><br>
    <input type="text" name="nama"><br><br>
    
    <label for="">Jenis Kelamin</label><br>
    <input type="radio" name="jenis_kelamin" value ="laki-laki">
         <label for="">Laki-laki</label>
    <input type="radio" name="jenis_kelamin" value ="Perempuan">
         <label for="">Perempuan</label><br><br>
         
    <label for="">Mata Kuliah</label><br>
    <input type="checkbox" name="matkul" value="Basis Data">
        <label for="">Basis Data</label><br>
    <input type="checkbox" name="matkul" value="Bahasa Inggris">
        <label for="">Bahasa Inggris</label><br><br>
        
    <label for="">Nomor Telepon</label><br>
    <input type="number" name="nomor_telepon"><br><br>
    
    <label for="">Prodi</label><br>
    <select name="prodi">
        <option value="Tekhnik Informatika">Tekhnik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
    </select><br><br>
    
    <button type="submit">kirim</button>
    <button type="button">contoh</button>
    <button type="reser">reset</button>

   </form> 
</body>
</html>