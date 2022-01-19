<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal2</title>
</head>
<body>
    <table>
        <h2>PROGRAM PENGULANGAN :</h2>
        <tr>
            <td>
                1. Soal 1
            </td>
        </tr>
        <tr>
            <td>
                2. Soal 2
            </td>
        </tr>
        <tr>
            <td>
                3. Soal 3
            </td>
        </tr>
        <Form action = "" method ="POST">
            <tr>
                <td>Masukkan soal</td>
                <td>:</td>
                <td><input type = "number" name = "program"></td>
            </tr>
            <tr>
                <td>Masukkan nilai</td>
                <td>:</td>
                <td><input type = "number" name = "n"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" name = "submit" value = "TAMPILKAN"></td>
            </tr>
        </form>
    </table>

    <?php
    if (isset($_POST['submit'])){
        $a = $_POST['program'];
        $nilai = $_POST['n'];
       

        if($a == 1){
            $x = 1;
            while($x <= $nilai){
               $y = 1;
               while($y <= $x){
                   echo "$y ";
                   $y++;
                }
                echo "<br>";
                $x++;
            }
           
        }
        else if($a == 2){
            for($i = $nilai ; $i >= 1; $i--){
                for ($q = $nilai; $q >= $i ; $q--) { 
                    echo"<center>";
                    echo"";
                }
                for($k = 1; $k <= $i; $k++){
                    echo"$k&nbsp";
                }
                echo"<br>";
                echo"</center>";
            }
            
        }
        else if($a == 3){
            $x = $nilai;
            while($x >= 1){
               $y = $nilai;
               while($y >= $x){
                   echo "$y ";
                   $y--;
                }
                echo "<br>";
                $x--;
            }
        }
        else{
            echo"<h2>SOAL YANG ANDA MASUKKAN TIDAK ADA!.....</h2>";
        }
    }
    ?>
</body>
</html>