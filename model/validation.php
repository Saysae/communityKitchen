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
    static function validLname($lname){
        return ctype_alpha($lname) && strlen(trim($lname)) >= 2;
    }
    static function validCountry($country){
        return ctype_alpha($country);
    }
    static function validFood($food){
        return ctype_alpha($food);
    }
    static function validDescription($description){
        return ctype_alpha($description) && strlen(trim($description)) <= 250;
    }
    static function validPrice($price){
        return is_float($price);
    }

}