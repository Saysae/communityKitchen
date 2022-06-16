<?php
//define constants - no spaces
define("DB_DSN", "mysql:dbname=cehirim1_grc");
define("DB_USERNAME", "cehirim1_sdev328");
define("DB_PASSWORD", "Softwaredev1");

//connecting to DB in a try-catch block
try{
    //connect to DB
    $db = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo "Still Connected!"; //this is great for testing but will interfere with header if left here
}
catch(PDOException $e){
    echo $e->getMessage();

//access denied means the password or username is wrong
}

//secure your connection by moving sdev328/pdo/config.phpFile to your home directory
//update index to require that moved path/file
//anything in public_html is web accessible - a secure location is a directory above public_html
