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

    function summary(){

    }

    function contact(){
        $view = new Template();
        echo $view->render('views/contact.html');
    }

}