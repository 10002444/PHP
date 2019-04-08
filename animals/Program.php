<? php
    $animals = ["Dog", "Cat", "Bunny", "Tiger", "Kiwi", "Horse", "Cow", "Lion", "Kangaroo", "Bird", "Dingo", "Elephant", "Shark", "Dolphin", "Giraffe", "Emu", "Crocodile", "Goat", "Monkey", "Lemur"];
    
    $output = "";

    function displayDropDown($array, $id)
{
        $output.= "<select id=\"{$id}\" >\n";
    foreach ($array as $animals) {
            $output.= "\t<option value=\"{$animals}\">{$animals}</option>\n";
    }
        $output.= "</select>\n";

    return $output;
}

echo displayDropDown($animals, "fruit1");
echo displayDropDown($animals, "fruit2");
echo displayDropDown($animals, "fruit3");

?>