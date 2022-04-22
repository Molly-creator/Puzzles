<?php

$File = file_get_contents('input.txt');
$Lines = explode("\n", $File);

$strlen = (strlen($Lines[0]) - 1);
$n = (count($Lines) - 1);

$Locations = [];
for ($i = 0; $i <= ($n - 3); $i++) {
    for ($j = 0; $j <= ($strlen - 3); $j++) {
        $location = [$i,$j];

        $four_sq = ($Lines[$i][$j] == $Lines[$i][$j + 1] && $Lines[$i][$j] == $Lines[$i][$j + 2] && $Lines[$i][$j] == $Lines[$i][$j + 3] && $Lines[$i][$j] == $Lines[$i + 1][$j + 1] && $Lines[$i][$j] == $Lines[$i + 1][$j + 2] && $Lines[$i][$j] == $Lines[$i + 1][$j + 3] && $Lines[$i][$j] == $Lines[$i + 3][$j + 1] && $Lines[$i][$j] == $Lines[$i + 3][$j + 2] && $Lines[$i][$j] == $Lines[$i + 3][$j + 3]);
        
        if ($four_sq) {
            if(!in_array($location, $Locations)) {
                echo "locatie in array: ($location[0], $location[1])" . PHP_EOL;
                echo $Lines[$i][$j] . " ($i, $j) -> 4x4" . PHP_EOL;
                //Push iedere locatie van vierkant in array locaties
                array_push($Locations, $location, [$i,$j+1], [$i,$j+2], [$i,$j+3]);
                array_push($Locations, [$i+1,$j], [$i+1,$j+1], [$i+1,$j+2], [$i+1,$j+3]);
                array_push($Locations, [$i+2,$j], [$i+2,$j+1], [$i+2,$j+2], [$i+2,$j+3]);
                array_push($Locations, [$i+3,$j], [$i+3,$j+1], [$i+3,$j+2], [$i+3,$j+3]);
            }
        }  
    }
}
for ($i = 0; $i <= ($n - 2); $i++) {
    for ($j = 0; $j <= ($strlen - 2); $j++) {
        $location = [$i,$j];
     
        // echo $Lines[$i][$j] . PHP_EOL;
        $three_sq = ($Lines[$i][$j] == $Lines[$i][$j + 1] && $Lines[$i][$j] == $Lines[$i][$j + 2] && $Lines[$i][$j] == $Lines[$i + 1][$j + 2] && $Lines[$i][$j] == $Lines[$i + 2][$j + 2]);
        if ($three_sq) {
          
            if(!in_array($location, $Locations)) {
                echo "locatie in array: ($location[0], $location[1])" . PHP_EOL;
            
            #print als locatie niet onderdeel is van een andere vierkant
            echo $Lines[$i][$j] . " ($i, $j) -> 3x3" . PHP_EOL;
        
            //Push iedere locatie van vierkant in array van Locaties
            array_push($Locations, $location, [$i,$j+1], [$i,$j+2]);
            array_push($Locations, [$i+1,$j], [$i+1,$j+1], [$i+1,$j+2]);
            array_push($Locations, [$i+2,$j], [$i+2,$j+1], [$i+2,$j+2]);
       
        }
        }
    }
}
for ($i = 0; $i <= ($n - 1); $i++) {
    for ($j = 0; $j <= ($strlen - 1); $j++) {
        $location = [$i,$j];

        $two_sq = ($Lines[$i][$j] == $Lines[$i][$j + 1] && $Lines[$i][$j] == $Lines[$i + 1][$j] && $Lines[$i][$j] == $Lines[$i + 1][$j + 1]);

            if ($two_sq) {
                if(!in_array($location, $Locations)) {
                    echo "locatie in array: ($location[0], $location[1])" . PHP_EOL;
                    echo $Lines[$i][$j] . " ($i, $j) -> 2x2" . PHP_EOL;
                    array_push($Locations, $location, [$i,$j+1]);
                    array_push($Locations, [$i+1,$j], [$i+1,$j+1]);
                }
            }

}}
