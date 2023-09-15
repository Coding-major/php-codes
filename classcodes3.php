<?php
    function change($string) {
        $length = 0;
        $array = [];
        while (isset($string[$length])) {
            $array[$length] = $string[$length];
            $length++;
        }

        for ($i=0; $i< count($array) ; $i++) {
            echo "<br>".$array[$i];
        }
    }

    change("mustapha");
?>

<br>/////////////////////////////////////////////////////////////////<br>

<?php
    function maxANDmin($array) {
        $max = $array[0];
        $min = $array[0];
        for ($i=0; $i<count($array); $i++) {
            
            if ($array[$i] < $min) {
                $min = $array[$i];
            }

            if ($array[$i] > $max) {
                $max = $array[$i];
            }     
        }

        return "min ".$min. "max ". $max;
    }
    
    echo maxANDmin([5,1,7,5,2,2,4,9,6,4]);
?>
<br>////////////////////////////////////// <br>
<?php
    function display($array) {
        $maxKey = "";
        $minKey = "";
        $maxValue = null;
        $minValue = null;
        foreach ($array as $key => $value) {
            if ($value > $maxValue) {
                $maxValue = $value;
                $maxKey = $key;
            }

            if ($minValue === null || $value < $minValue) {
                $minKey = $key;
                $minValue = $value;
            }
        }

        echo $maxKey," has the highest score of ". $maxValue;
        echo "<br>";
        echo $minKey," has the lowest value of ". $minValue;
    }
    $studentScores = [
        "Alice" => 85,
        "Bob" => 92,
        "Charlie" => 78,
        "David" => 95,
        "Eve" => 88
    ];

    display($studentScores);
?>