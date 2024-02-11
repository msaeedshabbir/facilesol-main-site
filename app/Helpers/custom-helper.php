<?php

// echo "This is Testing...";

if(!function_exists('testData')){
    function testData($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if(!function_exists('formatDate')){
    function formatDate($date, $format)
    {
        $formattedDate = date($format , strtotime($date));
        return $formattedDate;
    }
}

//Autoload in composer json
//Reset composer settings using following command
//composer dump-autoload
?>
