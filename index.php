<HTML>

<BODY>

<?php


$mytext1 = "Good morning!";
$mytext2 = "Suits you sir!";
$posWorld = strpos($mytext1, "Campers");
$lngmytext1 = strlen($mytext1);
$lngmytext2 = strlen($mytext2);

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

?>

</BODY>

</HTML>