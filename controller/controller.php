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
            $email = $_POST['email'];
            $country = $_POST['country'];
            $food = $_POST['food'];
            $description = $_POST['description'];
            $price= $_POST['price'];


            $this->_f3->set('fname', $fname);
            $this->_f3->set('email', $email);
            $this->_f3->set('country', $country);
            $this->_f3->set('food', $food);
            $this->_f3->set('description', $description);
            $this->_f3->set('price', $price);
            $fname="";
            $email="";
            $country="";
            $food="";
            $description="";
            if (isset($_POST['fname'])) {
                $fname = $_POST['fname'];
            };
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            };
            if (isset($_POST['country'])) {
                $country = $_POST['country'];
            };
            if (isset($_POST['food'])) {
                $food = $_POST['food'];
            };
            if (isset($_POST['description'])) {
                $description = $_POST['description'];
            };


            $dish= new Dish();
            $_SESSION['dish'] = $dish;
            if(Validation::validFName($fname)){
                $_SESSION['name'] = $fname;
            }else{
                $this->_f3->set('errors["fname"]', 'Only letters are allowed for names!');
            }
            if(Validation::validEmail($email)){
                $_SESSION['email'] = $email;
            }else{
                $this->_f3->set('errors["email"]', 'Please enter a valid email!');
            }
            if(Validation::validCountry($country)){
                $_SESSION['dish']->setCountry($country);
            }else{
                $this->_f3->set('errors["country"]', 'Please enter a Country name');
            }
            if(Validation::validFood($food)){
                $_SESSION['dish']->setFood($food);
            }else{
                $this->_f3->set('errors["food"]', 'Please enter the name of your dish');
            }
            if(Validation::validDescription($description)){
                $_SESSION['dish']->setDescription($description);
            }else{
                $this->_f3->set('errors["description"]', 'Please enter a short description of your dish');
            }

            if(empty($this->_f3->get('errors'))){
                header('location: summary');
            }
        }

        $view = new Template();
        echo $view->render('views/form.html');
    }
    function summary(){
        var_dump($_SESSION['dish']);
        var_dump($_SESSION['email']);
        var_dump($_SESSION['name']);
        $view = new Template();
        echo $view->render('views/summary.html');
    }

    function thanks(){
        $view = new Template();
        echo $view->render('views/thankYou.html');
    }

    function table()
    {
        //Get the orders from the DB and save them to the F3 hive
        $dish = $GLOBALS['data']->viewSuggestions();

        $this->_f3->set('dish', $dish);

        $view = new Template();
        echo $view->render('views/table.html');
    }


}