<?php

class CountryCuisine
{
    private $country;

    /**
     * @param $country
     */
    public function __construct()
    {

        $this->country ="";
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

}