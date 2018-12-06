1<?php
/**
 * Created by PhpStorm.
 * User: 11914
 * Date: 2018/12/6
 * Time: 13:33
 */

// Firstly test the function to judge the value of
    $boolvalue = true;
    $stringvalue = "hello<br/>";
    $namearray = array("heyining" , "age" , "18");
    echo $boolvalue."<br/>";
    echo $stringvalue;
    echo is_string($stringvalue)."<br/>";
    echo is_bool($boolvalue)."<br/>";
    echo "judge weather it is int".is_int($stringvalue)."are you kidding me?<br/>";
    if(is_int($stringvalue)) echo "This is int<br/>" ;
    if(is_string($stringvalue)) echo "This is string <br/>" ;
    $identity = array("name" => "Heyining" , "StudentID" => "IT10151698" , "major"=> "IT");


    foreach($identity as $key => $value){
    echo "-$key:$value<br />";
    }
    
    function printarray(){


    }
?>