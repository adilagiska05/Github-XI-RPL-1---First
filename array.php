<?php
// membuat array
echo"1. Menambah isi array <br><br>";
$hobi = [
    "Menggambar",
    "Membaca",
    "Menulis"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}

echo"<hr>";
echo"2. Menghapus isi array<br>";
// membuat array
$user = [
    "adila",
    "taehyung",
    "tricahyanti"
];

// menghapus taehyung
unset($user[1]);

echo "<pre>";
print_r($user);
echo "</pre>";



?>