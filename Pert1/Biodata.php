<?php

function statusKelulusan(float $ipk){
    if ($ipk >= 3.5) {
        return 'sangat memuaskan';
    } else if ($ipk >= 3){
        return 'Memuaskan';
    } else {
        return "perlu peningkatan";
    }
}

$mahasiswa = [
    'nim' => "2026001",
    "nama" => "Andi Pratama",
    "prodi" => "Teknik Informatika",
    "semester" => 1,
    'ipk' => 3.20
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
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
    <h1>Biodata Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $key => $nilai): ?>
            <li><?= ucfirst($key) ?>: <?= htmlspecialchars($nilai) ?></li>
            <?php endforeach; ?>
    </ul>
    <p>Predikat: <?= statusKelulusan($mahasiswa["ipk"]) ?></p>
</body>
</html>