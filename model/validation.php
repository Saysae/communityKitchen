<?php

class Validation
{


    function validateMenu($menu){
        $validFood = Data::getMenuAfgani();

        //make sure each user selection is in the array of valid options
        foreach ($menu as $foodMenu) {
            if (!in_array($foodMenu, $validFood)) {
                return false;
            }
        }
        return true;
    }

    function validFname($fname){

    }


}