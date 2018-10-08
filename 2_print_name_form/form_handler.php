<?php

if(isset($_POST['submit'])){
    // creating an empty array for storing the form values
    $fname = $lname = $fullname = "";

    if(empty($_POST['fname'])){
        array_push($errors, "First Name required"); // pushing the error to the $errors array
    }else{
        $fname = strip_tags($_POST['fname']); // removing the html tags in the user input

        if(strlen($fname)>30 || strlen($fname)<3){
            array_push($errors, "First name must be greater than 3 and less than 30"); // pushing the error to the $errors array
        }
    }

    if(!empty($_POST['lname'])){
        $lname = strip_tags($_POST['lname']); // removing the html tags in the user input

        if(strlen($lname)>30 || strlen($lname)<3){
            array_push($errors, "Last name must be greater than 3 and less than 30"); // pushing the error to the $errors array
        }
    }

    // checking if $lname is set or not and store the value in $fullname variable
    $fullname = isset($lname) ? $fname . " " . $lname : $fname;
}