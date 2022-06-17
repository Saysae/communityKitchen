<?php

class Chef
{
    private $fname;
    private $lname;

    /**
     * @param $fname
     * @param $lname
     */
    public function __construct()
    {
        $this->fname = "";
        $this->lname = "";
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname): void
    {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname): void
    {
        $this->lname = $lname;
    }




}