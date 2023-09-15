<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>switch case, do while, sorting arrays</h1>


<?php 
$name = "mustapha";
echo "my name is ".$name." and i am a good person<br>"; // you said what<
echo "my name is $name and i am a good person<br>";

///////////////////////////////////////////////////////////////////////////////////////////////////
$num1 = 10;
$num2 = "35.54";
$num3 = (int)$num2;

echo( "<br> $num3");
echo "<br>", $num1 + $num2;
function myNum() {
    global $num1;
    echo "<br>i counted to number". $GLOBALS['num1'];
}
myNum();


///////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br>", pi();
echo "<br>", min(0,2,4,6,8,3,5,);
echo "<br>", max(1,6,2,4,66);
echo "<br>", abs(-4.6);
echo "<br>", sqrt(4);
echo "<br>", round(2.78);
echo "<br>", rand();
echo "<br>", rand(1,4);

// defining constant///////////////////////////////////////////////////////////////////////
define("name", "mustapha");
echo "<br>", name;

//define constant array///////////////////////////////////////////////////////////////////////
define("names", ["mendem", "boss", "oga", "bro"]);
echo "<br>", names[1];

///////////////////////////////////////////////////////////////////////////////////////////
$firstNum = 10;
$result = 1;

while ($firstNum > 0) {
    $result *= $firstNum;
    $firstNum--;
}

echo"<br> factorial is ", $result;


////////////////////////////////////////////////////////////////////////////////////////////
$x = 0;
 
while($x < 10) {
  if ($x == 5) {
    $x++;
    continue;
  }
  echo "<br>The number is: $x <br>";
  $x++;
} 

//////////////////////////////////////////////////////////////////////////////////////////////////////
$age = 18; // The person's age
$can_vote = $age >= 18 ? "Yes, you can vote!" : "No, you cannot vote.";

echo "<br> ", $can_vote;

/////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<br><br>";
$kano = array("kuntau" => "small house", "race course" => "big house", "danbare" => "worst house", "salanta" => "normal house");

foreach ($kano as $street => $house) {
    echo "<br>", $house, " is located in ", $street;
}

////////////////////////////////////////////////////////////////////////
$devices = ["phone", "laptop", "mouse", "drive", "keyboard"];

foreach ($devices as $device) {
    echo "<br>" ,$device; 
}

$answer = $devices[1] == "lap" ? "yes you are correct" : "no, you are wrong";
echo "<br>", $answer;

//////////////////////////////////////////////////////////////////////////////////
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
echo"<br> the length of car array is ", count($cars), "<br>";
for ($i=0; $i<count($cars); $i++) {
    for ($j=0; $j < count($cars[$i]); $j++) {
        echo "<br>".$cars[$i][$j];
    }
    echo"<br>";
}

?> 


</body>
</html>
