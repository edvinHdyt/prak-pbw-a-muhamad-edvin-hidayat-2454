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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
    <?php include("Navbar.php")?>
    <div class="px-5">
        <div class="mt-2 px-5 py-2 rounded-sm border-1 border-slate-200 h-100 mt-10 shadow-sm ">
            <h1 class="flex justify-center font-bold text-4xl mb-10">Kalkulator</h1>
            <div class="flex flex-col justify-center items-center">
                <form method="post">
                    <div class="flex">
                        <input class="me-2 px-2 py-1 border-slate border-1 rounded-sm" type="number" name="a" required>
                        <select class="me-2 border-slate border-1 rounded-sm" name="operator">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                        <input class="me-2 px-2 py-1 border-slate border-1 rounded-sm" type="number" name="b" required>
                    </div>
                    <button type="submit" class="w-full mt-2 bg-blue-500 text-white rounded-md py-2 cursor-pointer shadow-md">Hitung</button>
                </form>
            
                <div >
                    <?php if ($pesan): ?>
                        <p class="mt-2 flex justify-center items-center bg-blue-300 py-3 px-3 rounded-md"><?=  htmlspecialchars($pesan) ?></p>
                    <?php elseif($hasil !== null): ?>
                        <p class="mt-2 flex justify-center items-center bg-blue-300 py-3 px-3 rounded-md">Hasil: <?=  htmlspecialchars($hasil) ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>