<?php

$v = $_REQUEST["v"];
$ary = array(3,2,5,4,1);

function asc_sorting($a) {
    for ($i=0;$i<count($a)-1;$i++) {
        for ($j=0;$j<count($a)-1;$j++) {
            if ($a[$j] > $a[$j+1]) 
            {
                $temp = $a[$j];
                $a[$j] = $a[$j+1];
                $a[$j+1] = $temp;
            }
        }
    }
    return $a;
}

function dsc_sorting($a) {
    for ($i=0;$i<count($a)-1;$i++) {
        for ($j=0;$j<count($a)-1;$j++) {
            if ($a[$j] < $a[$j+1]) 
            {
                $temp = $a[$j];
                $a[$j] = $a[$j+1];
                $a[$j+1] = $temp;
            }
        }
    }
    return $a;
}

function prt($prt) {
    echo "<div class=sort-box>";
    echo "<table style='border:1px solid black; width:50%;'>";

    echo "<tr>";
    echo "<th style='width:30%; border: 1px solid black;'>Room</th>";
    echo "<th style='width:30%; border: 1px solid black;'>Price</th>";
    echo "</tr>";

    for ($x=0; $x < count($prt); $x++) {

        echo "<tr>";
        if ($prt[$x] == 1) {
                echo "<td style='width: 30%;border: 1px solid black;'>Class 3</td>";
                echo "<td style='width: 30%;border: 1px solid black;'>Rp.100.000,-/Night</td>";
                echo "<td style='width: 30%;border: 1px solid black;'><img src=assets/images/3.jpg width=275px height=183px></td>";
        }
        else if ($prt[$x] == 2) {
                echo "<td style='width: 30%;border: 1px solid black;'>Class 2</td>";
                echo "<td style='width: 30%;border: 1px solid black;'>Rp.200.000,-/Night</td>";
                echo "<td style='width: 30%;border: 1px solid black;'><img src=assets/images/2.jpeg width=275px height=183px></td>";
        }
        else if ($prt[$x] == 3) {
            echo "<tr>";
                echo "<td style='width: 30%;border: 1px solid black;'>Class 1</td>";
                echo "<td style='width: 30%;border: 1px solid black;'>Rp.300.000,-/Night</td>";
                echo "<td style='width: 30%;border: 1px solid black;'><img src=assets/images/1.jpeg width=275px height=183px></td>";
            echo "</tr>";
        }
        else if ($prt[$x] == 4) {
            echo "<tr>";
                echo "<td style='width: 30%;border: 1px solid black;'>VIP</td>";
                echo "<td style='width: 30%;border: 1px solid black;'>Rp.400.000,-/Night</td>";
                echo "<td style='width: 30%;border: 1px solid black;'><img src=assets/images/VIP.jpg width=275px height=183px></td>";
            echo "</tr>";
        }
        else if ($prt[$x] == 5) {
                echo "<td style='width: 30%;border: 1px solid black;'>VVIP</td>";
                echo "<td style='width: 30%;border: 1px solid black;'>Rp.500.000,-/Night</td>";
                echo "<td style='width: 30%;border: 1px solid black;'><img src=assets/images/VVIP.jpg width=275px height=183px></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}

if ($v == 1) {
    $asc = asc_sorting($ary);
    prt($asc);
}
elseif ($v == 2) {
    $dsc = dsc_sorting($ary);
    prt($dsc);
}
?>