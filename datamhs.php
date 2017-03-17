<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Email : "; echo $obj->email;
echo "<br>";
echo "No_Hp : "; echo $obj->no_hp;
echo "<br>";
echo "Mata Kuliah1 : ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Mata Kuliah2: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Mata Kuliah3: ";echo $obj->mata_kuliah[2];
?>