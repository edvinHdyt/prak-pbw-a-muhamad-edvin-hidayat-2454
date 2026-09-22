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
    "nama" => "Edvin Hidayat",
    "prodi" => "Teknik Informatika",
    "semester" => 1,
    'ipk' => 3.89
];
$mhss = [$mahasiswa];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <?php include("Navbar.php")?>
    
    <div class="px-5">
        <div class="mt-2 flex flex-col px-5 py-2 rounded-sm border-1 border-slate-200 h-100 mt-10 shadow-sm flex-wrap">
            <h1 class="flex justify-center font-bold text-4xl mb-5">Biodata Mahasiswa</h1>
            <div class="flex">

            <?php foreach($mhss as $key => $mhs): ?>
                <div class="w-60 max-h-50 px-3 py-4 border-slate-100 border-2 shadow-md cursor-pointer me-5">
                    <div class="flex justify-end">
                        <div class="bg-blue-500 w-auto px-3 py-1 rounded-md text-white text-sm">
                            <?= $mhs["prodi"] ?>
                        </div>
                    </div>
                    <h3>
                        <?= $mhs["nama"] ?> -
                        <?= $mhs["nim"] ?>
                    </h3>
                    <p><?= $mhs["prodi"] ?> </p>
                    <p>Semester: <?= $mhs["semester"] ?> </p>
                    <span>IPK: <?= $mhs["ipk"] ?></span>
                    <p class="bg-blue-500 py-2 rounded-sm text-white flex justify-center text-sm mt-3">
                        Predikat: <?= statusKelulusan($mhs["ipk"]) ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>