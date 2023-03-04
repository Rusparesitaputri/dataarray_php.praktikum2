<?php
$nama_mahasiswa = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$mata_kuliah = $_POST['matkul'];
$nomor_telepon = $_POST['nomor_telepon'];
$prodi = $_POST['prodi'];

echo '<h1>Hasil Form Pendaftaran Mahasiswa STTNF</h1>';
echo 'nama : ' . $nama_mahasiswa . '<br>';
echo "jenis kelamin : " . $jenis_kelamin . "<br>";
echo "mata kuliah : " . $mata_kuliah . "<br>";
echo "Nomor telepon : " . $nomor_telepon . "<br>";
echo "prodi:" . $prodi . "<br>";