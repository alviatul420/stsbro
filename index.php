<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Angka</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #0F172A;
            color: white;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color:rgb(73, 151, 187);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 400px;
        }
        .output-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
            margin-bottom: 5px;
        }
        .output {
            font-size: 30px;
            font-weight: bold;
            color: yellow;
        }
        h3 {
            margin: 5px 0;
        }
        .input-container {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 5px;
        }
        input {
            padding: 5px;
            border: none;
            border-radius: 5px;
            width: 30%;
            text-align: center;
            font-size: 14px;
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: -28px;
        }
        button {
            padding: 5px;
            border: none;
            border-radius: 5px;
            background-color: #4F46E5;
            color: white;
            cursor: pointer;
            width: 30%;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $hasil = "";
            $operator = "";
            
            if ($angka1 == $angka2) {
                $hasil = "$angka1 sama dengan $angka2";
                $operator = "=";
            } elseif ($angka1 > $angka2) {
                $hasil = "$angka1 lebih besar dari $angka2";
                $operator = ">";
            } else {
                $hasil = "$angka1 lebih kecil dari $angka2";
                $operator = "<";
            }
            echo "<div class='output'>$operator</div>";
            echo "<h3>$hasil</h3>";
        }
        ?>
        
        <h2>Cek Perbandingan Angka</h2>
        <form method="POST">
            <div class="input-container">
                <input type="number" name="angka1" placeholder="Angka pertama" required>
                <input type="number" name="angka2" placeholder="Angka kedua" required>
            </div>
            <div class="button-container">
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
