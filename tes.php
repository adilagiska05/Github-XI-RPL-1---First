<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tes</title>
</head>
<body>
    <table>
        <h2>PROGRAM TES :</h2>
        <tr>
            <td>
                1. Program Pengulangan Kelipatan 2
            </td>
        </tr>
        <tr>
            <td>
                2. Program Pengulangan Kelipatan 5 X 5
            </td>
        </tr>
        <tr>
            <td>
                3. Program Ganjil Genap
            </td>
        </tr>
        <tr>
            <td>
                4. Program Pengulangan Kuadrat
            </td>
        </tr>
        <Form action = "" method ="POST">
            <tr>
                <td>Masukkan program</td>
                <td>:</td>
                <td><input type = "number" name = "program"></td>
            </tr>
            <tr>
                <td>Masukkan nilai</td>
                <td>:</td>
                <td><input type = "number" name = "nilai"></td>
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
        $b = $_POST['nilai'];

        if($a == 1){
            echo"Program Pengulangan Kelipatan 2 <br>";
            echo"<br>";
            for($y = 2; $y <= $b; $y += 2){
                echo"$y&ensp;";
            }
        }
        else if($a == 2){
            echo"Program Pengulangan Kelipatan 5 x 5 <br>";
            echo"<br>";
            for($x = 5; $x <= $b; $x += 5){
                $y = $x * 5;
                echo"Nilai =  $x x 5 = $y<br>";
            }
        }
        else if($a == 3){
            echo"Program Ganjil Genap <br>";
            echo"<br>";
            for($g = 1; $g <= $b; $g++){
                if(($g % 2) == 0){
                    echo"$g adalah bilangan genap <br>";
                }
                else{
                    echo"$g adalah bilangan ganjil <br>";
                }
            }
        }
        else if($a == 4){
            echo"Program Pengulangan Kuadrat <br>";
            for ($m=1; $m <= $b ; $m++) { 

                $n = $m * $m;

                echo "$m x $m = $n<br>";
            }
        }
    }
    ?>
</body>
</html>