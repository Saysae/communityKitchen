<?php


function getMenu(){

    return array (
        //Afgani menu
        'Afghani Food' => array(
            'Lamb Kabab' =>  array('Marinated with garlic, black pepper', 21.99, 'menuImages/lambKebab.png'),
            'Manto Dumpling' => array('Beef with onion', 24.99, 'menuImages/dumpling.png'),
            'Qabili Palow' => array('Rice, Risen and Carrot', 29.99,'menuImages/palow.png')),

        //Nigerian menu
        'Nigerian Food' => array(
            'Tuwo Shinkafa' =>  array('Mashed rice served with soup', 19.99,'menuImages/tuwo.png'),
            'Moin Moin' => array('Steamed bean cakes', 18.99,'menuImages/moin.png'),
            'Jollof Rice' => array('Made of rice, tomato paste', 15.99,'menuImages/jollof.png')),

        //Chinese menu
        'Chinese Food' => array(
            'Szechuan Noodles' =>  array('Garlic chili base noodles SPICY', 15.99,'menuImages/szechuan.png'),
            'Sesame Balls' => array('Made with red beans and rice', 5.99,'menuImages/sesame.png'),
            'Pork Bun' => array('Delicious rice pun with bbq pork', 10.99,'menuImages/porkbuns.png')),

        //Iraqi Food
        'Iraqi Food' => array(
            'Dolma' =>  array('Stuffed with vegetables', 10.99,'menuImages/dolma.png'),
            'Falafel' => array('Made with vegetablpes', 5.99, 'menuImages/falafel.png'),
            'Kebab' => array('Different marinated meat', 15.99,'menuImages/beefKebab.png')),

        );
}
