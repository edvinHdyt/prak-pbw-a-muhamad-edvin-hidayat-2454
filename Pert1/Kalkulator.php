<?php
    $hasil = null;
    $pesan = '';


    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $a = $_POST['a'] ?? 0;
        $b= $_POST['b'] ?? 0;
        $operator = $_POST["operator"] ?? '+';

        switch ($operator) {
            case '+':
                $hasil = $a + $b;
                break;
            case '-':
                $hasil = $a - $b;
                break;
            case '*':
                $hasil = $a * $b;
                break;
            case '/':
                if ($b == 0){
                    $pesan = 'Pembagian dengan nol tidak diperbolehkan';
                } else {
                    $hasil = $a / $b;
                }
                break;
            
            default:
                $pesan = "Operator tidak valid";
                break;
                
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalulator</title>
</head>
<body>

    <div class="">
        <h2>Menu</h2>
        <ul>
            <li>
                <a href="kalkulator.php">Kalkulator</a>
            </li>
            <li>
                <a href="Biodata.php">Biodata</a>
            </li>
        </ul>
    </div>
    <h1>Kalkulator Sederhana</h1>
    <form method="post">
        <input type="number" name="a" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="b" required>
        <button type="submit">Hitung</button>
    </form>

    <?php if ($pesan): ?>
        <p><?=  htmlspecialchars($pesan) ?></p>
    <?php elseif($hasil !== null): ?>
        <p>Hasil: <?=  htmlspecialchars($hasil) ?></p>
    <?php endif; ?>
    
</body>
</html>