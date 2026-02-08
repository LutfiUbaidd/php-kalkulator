<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    
    <form action="" method="POST">
        Angka Pertama <input type="text" name="angka1"><br>
        Angka Kedua <input type="text" name="angka2"><br>
        Operator <select name="operator">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="x"> x </option>
            <option value="/"> / </option>
            </select>
            <button type="submit" name="operasikan"> Operasikan </button>
    </form>

    <?php
        if(isset($_POST['operasikan'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];
            $hasil = 0;

            //Penjumlahan
            if($operator == "+"){
                $hasil = $angka1 + $angka2;
            }

            //Pengurangan
            if($operator == "-"){
                $hasil = $angka1 - $angka2;
            }

            //Perkalian
            if($operator == "x"){
                $hasil = $angka1 * $angka2;
            }

            //Pembagian
            if($operator == "/"){
                $hasil = $angka1 / $angka2;
            }

            echo "<br>";
            echo "$angka1 $operator $angka2 <br>";
            echo "= $hasil";
        }

    ?>
</body>
</html>