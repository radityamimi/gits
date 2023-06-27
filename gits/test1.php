<?php
function generateA000124Sequence($n) {
    $sequence = [];
    $currentNumber = 0;

    for ($i = 1; $i <= $n; $i++) {
        $currentNumber += $i;
        $sequence[] = $currentNumber;
    }

    return $sequence;
}

function generateOutput($sequence) {
    $output = implode('-', $sequence);
    return $output;
}

// Mengambil input dari pengguna
$input = 7;

// Memanggil fungsi generateA000124Sequence untuk mendapatkan deret A000124
$sequence = generateA000124Sequence($input);

// Memanggil fungsi generateOutput untuk menghasilkan output dalam format yang diinginkan
$output = generateOutput($sequence);

// Menampilkan output
echo $output;