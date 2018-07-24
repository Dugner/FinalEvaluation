<?php
################################ POST Request to check if we got input##########
if(isset($_POST) && !empty($_POST)) 
{
    $ok = true;
    // checking if the user selected the right data
    if(empty($_POST['mark']) || !in_array($_POST['mark'], ['BMW', 'FERRARI', 'MERCEDES', 'TOYOTA']))
    {
        // display error if wrong data
        echo 'please select a valid Mark of Car';
        
        $ok = false;
    }
    
    if(empty($_POST['model']) || strlen($_POST['model']) < 2)
    {
        // display error if wrong data
        echo 'Model need at least 2 characters.';
        
        $ok = false;
    }
    
   
    // checking if the user selected the right data
    if(empty($_POST['color']) || !in_array($_POST['color'], ['Red', 'Blue', 'Black', 'White']))
    {
        // display error if wrong data
        echo 'please select a valid Color of Car';
        
        $ok = false;
    }
    
    if(empty($_POST['year']) || ($_POST['year']) == 4)
    {
        // display error if wrong data
        echo 'Year need at least 4 characters';
        
        $ok = false;
    }
    
    
    if($ok)
    {
        echo 'You have seccsessfuly enter the data';
        http_response_code(200);
        //succsess !!! :) 
    }
    else
    {
        http_response_code(400);
        echo 'you have a problem with entering data';
        //user error
    }
    
}
else
{
    // display error
    http_response_code(405);
    echo 'nok';
    //ourside error .... ohh not again :(
}