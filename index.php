<HTML>

<BODY>

<?php


$mytext1 = "Good morning!";
$mytext2 = "Suits you sir!";
$posWorld = strpos($mytext1, "Campers");
$lngmytext1 = strlen($mytext1);
$lngmytext2 = strlen($mytext2);
$browser = $_SERVER['HTTP_USER_AGENT'];

echo "The first string is: '";
echo $mytext1;
echo "'<br/><br/>";
echo "The second string is: '";
echo $mytext2;
echo "'<br/><br/>";

echo "The number of characters in the first string is:";
echo $lngmytext1;
echo "<br/> <br/>";
echo "The number of characters in the second string is";
echo $lngmytext2;
echo "<br/> <br/>";

echo "The word 'Campers' starts at position ";
echo $posWorld+1;
echo "in the first string. <br/><br/>";

echo "We can concatenate the strings:<br/><br/>";
echo ($mytext1) . " " . $mytext2 . "\n";

echo "Your browser is: $browser";


?>

</BODY>

</HTML>