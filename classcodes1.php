<?php 
    function theLength($strInput) {
        $length = 0;
        while (isset($strInput[$length])) {
            $length++;
        }

        return $length;
    }

    echo theLength("mustapha");
?>
//////////
<!-- <?php
    // $i=1;
    // while($i <= 5) {
    //     echo $i,"  ",
    // }
?> -->
<br><br><br>

<?php
$n = 5; // Change this value to adjust the number of rows

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>
<br><br><br>


<?php
$n = 5; // Change this value to adjust the number of rows

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo "<br>";
}
?>
<br><br><br>


<?php

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        $index = $j-1;
        echo $j . " ";
    }
    for ($j = $index; $j >= 1; $j--) {
        echo $j . " ";
    }
    echo "<br>";
}
?>