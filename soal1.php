<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal1</title>
</head>
<body>
    <center>
    <table>
        <h2>PROGRAM WHILE DAN DO WHILE :</h2>
        <tr>
            <td>
                1. Program while 1
            </td>
        </tr>
        <tr>
            <td>
                2. Program while 2
            </td>
        </tr>
        <tr>
            <td>
                3. Program while 3
            </td>
        </tr>
        <tr>
            <td>
                4. Program do while 1
            </td>
        </tr>
        <tr>
            <td>
                5. Program do while 2
            </td>
        </tr>
        <tr>
            <td>
                6. Program do while 3
            </td>
        </tr>

        <Form action = "" method ="POST">
            <tr>
                <td>Masukkan program</td>
                <td>:</td>
                <td><input type = "number" name = "program"></td>
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

        if($a == 1){
            $g = 0;
            echo'<b>MENAMPILKAN PERULANGAN WHILE KE 1</b> <br>';
            while($g < 10){
                echo "<p>Ini adalah perulangan ke-$g</p>";
                $g++;
            }
        }
        else if($a == 2){
            $b = 5;
            echo'<b>MENAMPILKAN PERULANGAN KE 2</b> <br>';
            while($b > 0){
                echo $b;
                echo "<br/>";
                $b--;
            }
        }
        else if($a == 3){
            $c = 100;
            echo'<b>MENAMPILKAN PERULANGAN KE 3</b> <br>';
            while($c >= 0){
               echo "$c";
               echo "<br/>";
               $c-=8;
            }
        }
        else if($a == 4){
            echo'<b>MENAMPILKAN PERULANGAN DO WHILE KE 1</b> <br>';
            $d=1000;
            do{
                echo "$d<br>";
                echo "Akan tampil di browser <br/>";
                $d=$d+1;
            }while ($d <= 10);

        }
        else if($a == 5){
            echo'<b>MENAMPILKAN PERULANGAN DO WHILE KE 2</b> <br>';
            $e=1;
            do{
                echo "$e";
                echo "<br />";
                $e=$e+1;
            } while ($e <= 10);
        }
        else if($a == 6){
            echo'<b>MENAMPILKAN PERULANGAN DO WHILE KE 3</b> <br>';
            $a = 0;
            do {
               echo "Mengulang sampai 3 kali <br/>";
               $a++;
            } while ($a < 3);
        }
        else{
            echo"<h2>PROGRAM YANG ANDA MASUKKAN TIDAK ADA!.....</h2>";
        }

        
    }
    ?>
    </center>
</body>
</html>