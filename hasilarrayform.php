<?php
if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $indo = $_POST['indo'];
    $ingg = $_POST['ingg'];
    $mtk = $_POST['mtk'];
    $rpl = $_POST['rpl'];
    $hasil = 0;
    $rata = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil array</title>
</head>
<body>
    <center>
        <h2>Data Siswa XI RPL 1</h2>
        <table border="1" >
            <tr bgcolor="#6495ED">
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>B.Indonesia</th>
                <th>B.Inggris</th>
                <th>Matematika</th>
                <th>Produktif</th>
                <th>Total Nilai</th>
                <th>Rata-rata</th>
                <th>Grade</th>
            </tr>
            <?php
            for ($m = 0; $m < count($nis); $m++) {
            ?>

            <tr align = "center">
                <td><?php echo $nis[$m]; ?> </td>
                <td><?php echo $nama[$m]; ?> </td>
                <td><?php echo $kelas[$m]; ?> </td>
                <td><?php echo $indo[$m]; ?> </td>
                <td><?php echo $ingg[$m]; ?> </td>
                <td><?php echo $mtk[$m]; ?> </td>
                <td><?php echo $rpl[$m]; ?> </td>
                <td><?php echo 
                $hasil = $indo[$m] + $ingg[$m] + $mtk[$m] + $rpl[$m];
                $hasil;?></td>

                <td><?php $rata = $hasil / 4;
                echo $rata;?></td>

                <td><?php if($rata <= 75 && $rata >= 0){
                    echo "TIDAK LULUS";
                }
                else if($rata >= 75 && $rata <= 100){
                    echo "LULUS";
                }
                else{
                    echo "ERROR";
                }}
                ?></td>
        
            </tr>
        

        </table>
    </center>

</body>
</html>