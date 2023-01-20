<?php 

//dump and die (its like a console log)
function dd($value){ 
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function check_uri($value){ 
    return ($_SERVER["REQUEST_URI"] === $value);
   
}