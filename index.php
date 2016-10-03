<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello world</title>
</head>
<body>
<p>
    <?php
    /*
    echo "Hello World";

    $name="harry";

    $firstNumber= 1;
    $secondNumber = 2;

    if ($firstNumber < $secondNumber){

       print "<p>your number is greater than the second number</p>";

    }

    if ($name == "harry") {
        print "<p>your name is $name and </p>";
        print "I know you!";
    }
    else {
        print "Who are you fam?";
    }
*/
    $numberOfHobbits = 2;
    switch ($numberOfHobbits) {
        case 1:
            echo "1 sad hobbit";
            break;
        case 2:
            echo "2 happy hobbits";
            break;
        case 3:
            echo "3 hobbits are a crowd";
            break;
        default:
            echo "All the hobbits have gone home";
    }


    $myArray = array("do", "re", "mi"); // declares the array
    echo $myArray[0]; // outputs "do"
    $myArray[1] = "la"; // modifies position 1 (re)
    echo $myArray[1];// outputs "la"
    unset($myArray[2]); // removes the array in position 2


    for ($i = 1; $i < 10; $i++)
    {
        echo "<p>Hello!</p>";
    }
/*
    foreach($arrayelement as $x) {
        print "<p>$x</p>";
    }
*/
    ?>
</p>

</body>
</html>