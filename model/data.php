<?php

class Data
{

    static function getMenuAfgani(){
        return array (
            'Afghani Food' => array(
            'Lamb Kabab' =>  array('Marinated deliciousness', 21.99, 'menuImages/lambKebab.png'),
            'Manto Dumpling' => array('Beef with onion', 24.99, 'menuImages/dumpling.png'),
            'Qabili Palow' => array('Rice, Risen and Carrot', 29.99,'menuImages/palow.png'))
        );
    }
    static function getMenuNigerian(){
        return array (
            'Nigerian Food' => array(
                'Tuwo Shinkafa' =>  array('Mashed rice and soup', 19.99,'menuImages/tuwo.png'),
                'Moin Moin' => array('Steamed bean cakes',18.99,'menuImages/moin.png'),
                'Jollof Rice' => array('Made of rice, tomato paste',15.99,'menuImages/jollof.png')),
        );
    }
    static function getMenuChinese(){
        return array (
            'Chinese Food' => array(
                'Szechuan Noodles' =>  array('Garlic chili base noodles', 15.99,'menuImages/szechuan.png'),
                'Sesame Balls' => array('With red beans and rice',5.99,'menuImages/sesame.png'),
                'Pork Bun' => array('Rice pun with bbq pork',10.99,'menuImages/porkbuns.png')),
        );
    }
    static function getMenuIraqi(){
        return array (
            'Iraqi Food' => array(
                'Dolma' =>  array('Stuffed with vegetables', 10.99,'menuImages/dolma.png'),
                'Falafel' => array('Made with vegetables',5.99, 'menuImages/falafel.png'),
                'Kebab' => array('Different marinated meat', 15.99,'menuImages/beefKebab.png')),
        );
    }

}

