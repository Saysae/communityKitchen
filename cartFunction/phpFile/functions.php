<?php

class MENU
{

    private string $_name;
    private string $_description;
    private string $_ratings;
    private int $_price;

    /**
     * @param string $_name
     * @param string $_description
     * @param string $_ratings
     * @param int $_price
     */
    public function __construct(string $_name = "", string $_description = "", string $_ratings = "", int $_price = 0)
    {
        $this->_name = $_name;
        $this->_description = $_description;
        $this->_ratings = $_ratings;
        $this->_price = $_price;
    }


    function foodItem()
    {

    }
}