<? php

    $name = "Bob";
    echo $name;

    echo"<br><br>";

    $age = 64;
    echo $age;

    $name2 = "Martha";
    $age2 = 60;

    echo"<br><br>";

    if($age == $age3) {
        echo "Bob and Martha are the same age";
    }

// "// checks for value only, /// checks for values and data type e.g. string"


    $fruits = ["apple", "banana", "coconut", "strawberry"];

    foreach($fruits as $fruit) {
        echo $fruit."<br>";
    }

    function greeting()
{

    return $name;
}

    $myname = greeting("Marisa");

echo $myname;

    echo "<br><br>";

    echo gettype($myname);

?>
