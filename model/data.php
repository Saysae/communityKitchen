<?php

class Data
{
    private $_dbh;

    /** DataLayer constructor
     *
     */
    function __construct()
    {
        //TODO: Move try-catch from config.php to here
        require_once $_SERVER['DOCUMENT_ROOT'].'/../config.php';
        $this->_dbh = $dbh;
        $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    function saveSuggestions($dish)
    {

        //1. Define the query
        $sql = "INSERT INTO dish (country, food, description, ) 
                VALUES (:country, :food, :description)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $country = $dish->getCountry();
        $food = $dish->getFood();
        $description = $dish->getDescription();

        $statement->bindParam(':food', $food, PDO::PARAM_STR);
        $statement->bindParam(':country', $country, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);

        //4. Execute the prepared statement
        $statement->execute();

        //5. Process the result
        $id = $this->_dbh->lastInsertId();
        //echo "Row inserted: $id";
        return $id;
    }

    function viewSuggestions()
    {
        //1. Define the query
        $sql = "SELECT * FROM dish";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters

        //4. Execute the prepared statement
        $statement->execute();

        //5. Process the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        //var_dump($result);
    }

    static function getMenuAfgani(){
        return array (
            'Afghani Food' => array(
            'Lamb Kabab' =>  array('Marinated deliciousness', 21.99, 'menuImages/lambKebab.png'),
            'Manto Dumpling' => array('Beef with onion', 24.99, 'menuImages/dumpling.png'),
            'Qabili Palow' => array('Rice, Risen and Carrot and marinated pork', 29.99,'menuImages/palow.png'))
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

