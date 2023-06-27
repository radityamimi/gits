<?php
function isBalancedBracket($input) {
    $stack = [];
    $bracketPairs = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        if (in_array($char, ['(', '[', '{'])) {
            array_push($stack, $char);
        } elseif (in_array($char, [')', ']', '}'])) {
            if (empty($stack) || $stack[count($stack) - 1] !== $bracketPairs[$char]) {
                return 'NO';
            }
            array_pop($stack);
        }
    }

    return empty($stack) ? 'YES' : 'NO';
}

// Contoh penggunaan
$input1 = "{ [ ( ) ] }";
$input2 = "{ [ ( ] ) }";
$input3 = "{ ( ( [ ] ) [ ] ) [ ] }";

$output1 = isBalancedBracket($input1);
$output2 = isBalancedBracket($input2);
$output3 = isBalancedBracket($input3);

// Menampilkan output
echo "Output 1: " . $output1 . "\n";
echo "Output 2: " . $output2 . "\n";
echo "Output 3: " . $output3 . "\n";