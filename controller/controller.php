<?php

class Controller
{
    private $f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home(){
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function menu(){
        $this->_f3->set('afganiMenu', Data::getMenuAfgani());
        $this->_f3->set('chineseMenu', Data::getMenuChinese());
        $this->_f3->set('iraqiMenu', Data::getMenuIraqi());
        $this->_f3->set('nigerianMenu', Data::getMenuNigerian());

        $view = new Template();
        echo $view->render('views/menu.html');
    }

    function contact(){
        $view = new Template();
        echo $view->render('views/contact.html');
    }

    function form(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $country = $_POST['country'];
            $food = $_POST['food'];
            $description = $_POST['description'];
            $price= $_POST['price'];


            $this->_f3->set('fname', $fname);
            $this->_f3->set('lname', $lname);
            $this->_f3->set('country', $country);
            $this->_f3->set('food', $food);
            $this->_f3->set('description', $description);
            $this->_f3->set('price', $price);
            $fname="";
            $lname="";
            $country="";
            $food="";
            $description="";
            $price = "";
            if (isset($_POST['fname'])) {
                $fname = $_POST['fname'];
            };
            if (isset($_POST['lname'])) {
                $lname = $_POST['lname'];
            };
            if (isset($_POST['country'])) {
                $country = $_POST['country'];
            };
            if (isset($_POST['food'])) {
                $food = $_POST['food'];
            };
            if (isset($_POST['decription'])) {
                $description = $_POST['decription'];
            };
            if (isset($_POST['price'])) {
                $price = $_POST['price'];
            };

            $chef = new Chef($fname, $lname);
            if(Validation::validFName($fname)){
                $_SESSION['chef'] = $chef;
                $_SESSION['puppy']->setFname($fname);

            }else{
                $this->_f3->set('errors["fname"]', 'Only letters are allowed for first names!');
            }
            if(Validation::validLName($lname)){
                $_SESSION['chef']->setLname($lname);
            }else{
                $this->_f3->set('errors["lname"]', 'Only letters are allowed for last names!');
            }
            if(Validation::validAge($country)){
                $_SESSION['chef']->setCountry($country);
            }else{
                $this->_f3->set('errors["coutnry"]', 'Please select an age between 18 and 118 :)');
            }
            if(Validation::validPhone($phone)){
                $_SESSION['puppy']->setNumber($phone);
            }else{
                $this->_f3->set('errors["phone"]', 'Please enter a 10 digit number
            (including area code)');
            }

            if(empty($this->_f3->get('errors'))){
                header('location: profile');
            }
        }

        $view = new Template();
        echo $view->render('views/adminForm.html');
    }
    function summary(){

    }
}