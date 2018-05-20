<?php
//People array @TODO - Get from DB
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Erie";
$people[] = "Bob";
$people[] = "Don";
$people[] = "Linda";
$people[] = "Carol";
$people[] = "Eva";
$people[] = "Eddie";
$people[] = "Sarah";
$people[] = "Patti";
$people[] = "Patricia";
$people[] = "Mike";
$people[] = "Bonnie";
$people[] = "Allen";
$people[] = "Tobby";
$people[] = "Richard";
$people[] = "Lauren";
$people[] = "Ashley";
$people[] = "Aaron";
$people[] = "Lisa";
$people[] = "Melisa";
$people[] = "Rob";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Caleb";
$people[] = "Mary";
$people[] = "Madeline";
$people[] = "Cory";
$people[] = "Lance";
$people[] = "Harris";
$people[] = "Chauncy";
$people[] = "Matthew";
$people[] = "Teri";

//Get query string
$q = $_REQUEST['q'];

$suggestion = "";

//Get suggestions

if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
} 


echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>
