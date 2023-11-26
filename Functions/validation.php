<?php

function checkEmpty($value){
    if (empty($value)){
        return false ;
    }
    return true ;
}

function validEmail($email){
    if(!filter_var($email.filter_validate_email)){
        return false ;
    }
}
function Check_letters_of_word($value,$min){
    if (trim(strlen($value)) <= $min){
        return false;
    }else{
        return true;
    }
}


?>