<?php
// penggunaan top dan bottom
$provinsi = array(
    '11' => 'ACEH',
    '12'=> 'SUMATERA UTARA',
    '13' => 'SUMATERA BARAT',
    '14' =>'RIAU',
    '15' =>'JAMBI',
    '16' =>'SUMATERA SELATAN',
    '17' =>'BENGKULU',
    '18' =>'LAMPUNG',
    '19' =>'KEPULAUAN BANGKA BELITUNG',
    '21' =>'KEPULAUAN RIAU',
    '31' =>'DKI JAKARTA',
    '32' =>'JAWA BARAT',
    '33' =>'JAWA TENGAH',
    '34' =>'DIY YOGYAKARTA',
    '35' =>'JAWA TIMUR',
    '36' =>'BANTEN',
    '51' =>'BALI',
    '52' =>'NUSA TENGGARA BARAT',
    '53' =>'NUSA TENGGARA BARAT',
    '61' =>'KALIMANTAN BARAT',
    '62' =>'KALIMANTAN TENGAH',
    '63' =>'KALIMANTAN SELATAN',
    '64' =>'KALIMANTAN TIMUR',
    '65' =>'KALIMANTAN UTARA',
    '71' =>'SULAWESI UTARA',
    '72' =>'SULAWESI TENGAH',
    '73' =>'SULAWESI SELATAN',
    '74' =>'SULAWESI TENGGARA',
    '75' =>'GORONTALO',
    '76' =>'SULAWESI BARAT',
    '81' =>'MALUKU',
    '82' =>'MALUKU UTARA',
    '81' =>'PAPUA BARAT',
    '94' =>'PAPUA',
);

echo "<h2> API Statis Data Wilayah Indonesia Menggunakan Foreach</h2>";
foreach ($provinsi as $a => $b) {
    
    echo "<b>id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $a . "</b><br><b>  nama : " . $b . "</b><br>"; 
    echo "<hr>";
}


echo "<h2> API Statis Data Wilayah Indonesia Menggunakan Top dan Bottom</h2>";
print "<h2>Original\n </h2>";
foreach ($provinsi as $a => $b) {
    
    echo "<b>id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $a . "</b><br><b>  nama : " . $b . "</b><br>"; 
    echo "<hr>";
}



print "<h2>Move JAWA BARAT,DKI JAKARTA,DIY YOGYAKARTA to the top\n</h2>";
move_to_top($provinsi, '34');
move_to_top($provinsi, '31');
move_to_top($provinsi, '32');

foreach ($provinsi as $a => $b) {
  
    echo "<b>id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $a . "</b><br><b>  nama : " . $b . "</b><br>"; 
    echo "<hr>";
}



print "<h2>Move SUMATERA BARAT, ACEH to the bottom\n</h2>";
move_to_bottom($provinsi, '13');
move_to_bottom($provinsi, '11');

foreach ($provinsi as $a => $b) {
  
    echo "<b>id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $a . "</b><br><b>  nama : " . $b . "</b><br>"; 
    echo "<hr>";
}



function move_to_top(&$array, $key)
{
    $temp = array($key => $array[$key]);
    unset($array[$key]);
    $array = $temp + $array;
}

function move_to_bottom(&$array, $key)
{
    $value = ($array[$key]);
    unset($array[$key]);
    $array[$key] = $value;
}
?>