<?php


function getMenu(){

    return array (
        //Afgani menu
        'Afghani Food' => array(
            'Lamb Kabab' =>  array('Marinated with garlic, black pepper', 21.99, 'menuImages/lambKebab.png'),
            'Manto Dumpling' => array('Beef with onion', 24.99, 'images/asian2.png'),
            'Qabili Palow' => array('Rice, Risen and Carrot', 29.99)),

        //Nigerian menu
        'Nigerian Food' => array(
            'Tuwo Shinkafa' =>  array('Mashed rice served with soup', 19.99),
            'Moin Moin' => array('Steamed bean cakes', 18.99),
            'Jollof Rice' => array('Made of rice, tomato paste', 15.99)),

        //Chinese menu
        'Chinese Food' => array(
            'Szechuan Noodles' =>  array('Garlic chili base noodles SPICY', 15.99),
            'Sesame Balls' => array('Made with red beans and rice', 5.99),
            'Pork Bun' => array('Delicious rice pun with bbq pork', 10.99)),

        //Iraqi Food
        'Iraqi Food' => array(
            'Dolma' =>  array('Stuffed with vegetables', 10.99),
            'Falafel' => array('Made with vegetablpes', 5.99),
            'Kebab' => array('Different marinated meat', 15.99)),

        );
}
