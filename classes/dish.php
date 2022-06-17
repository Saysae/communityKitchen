<?php

class Dish extends CountryCuisine
{
    private $food;
    private $description;


    public function __construct()
    {
        parent::__construct();

        $this->food = "";
        $this->description = "";
    }

    /**
     * @return mixed
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * @param mixed $food
     */
    public function setFood($food): void
    {
        $this->food = $food;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }



}