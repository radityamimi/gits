<?php
function denseRanking($scores, $gitsScores) {
    $ranking = [];
    $sortedScores = array_unique($scores);
    rsort($sortedScores);

    foreach ($gitsScores as $score) {
        $rank = 1;
        foreach ($sortedScores as $value) {
            if ($score < $value) {
                $rank++;
            }
        }
        $ranking[] = $rank;
    }

    return $ranking;
}

// Input
$playerCount = 7;
$scores = [100, 100, 50, 40, 40, 20, 10];
$gameCount = 4;
$gitsScores = [5, 25, 50, 120];

// Memanggil fungsi denseRanking untuk mendapatkan peringkat setiap permainan GITS
$ranking = denseRanking($scores, $gitsScores);

// Menampilkan output
$output = implode(" ", $ranking);
echo $output;