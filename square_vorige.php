<?PHP
// Vind alle 2x2 vierkanten met klinkers (A,O,E,I,U).

$file = "input.txt";
$contents = file_get_contents($file);
$lines = explode("\n", $contents);

echo "Vierkanten gevonden op (kolom, rij): " . PHP_EOL;

$len = (count($lines) - 1);

for ($row = 0; $row < $len; $row++) {
    $n_col = strlen($lines[$row]);
    $x = $n_col - 1;
    for ($col = 0; $col < $x; $col++) {
        $vierkant = ($lines[$row][$col] . $lines[$row + 1][$col] . $lines[$row][$col + 1] . $lines[$row + 1][$col + 1]);

        if ($vierkant == "AAAA") {
            echo "A: ($col, $row)" . PHP_EOL;
        } elseif ($vierkant == "EEEE") {
            echo "E: ($col, $row)" . PHP_EOL;
        } elseif ($vierkant == "OOOO") {
            echo "O: ($col, $row)" . PHP_EOL;
        } elseif ($vierkant == "IIII") {
            echo "I: ($col, $row)" . PHP_EOL;
        } elseif ($vierkant == "UUUU") {
            echo "U: ($col, $row)" . PHP_EOL;
        }
    }
}