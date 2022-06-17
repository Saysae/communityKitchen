<?php

class Validation
{


    static function validateMenu($menu){
        $validFood = Data::getMenuAfgani();

        //make sure each user selection is in the array of valid options
        foreach ($menu as $foodMenu) {
            if (!in_array($foodMenu, $validFood)) {
                return false;
            }
        }
        return true;
    }

    static function validFname($fname){
        return ctype_alpha($fname) && strlen(trim($fname)) >= 2 ;
    }
    static function validEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    static function validCountry($country){
        return strlen(trim($country)) >= 2;
    }
    static function validFood($food){
        return strlen(trim($food)) >= 2;
    }
    static function validDescription($description){
        return strlen(trim($description)) >= 2;
    }

}