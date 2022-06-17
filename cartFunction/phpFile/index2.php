<?php
//turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', TRUE);


//require_once 'config.phpFile';
//after moving to home use this require_once
//require_once 'home/cehirim1/config.phpFile';
//use this require_once statement because of team programming to allow
//everyone use the file without needing to change the require_once route.
require_once $_SERVER['DOCUMENT_ROOT'].'/../config.phpFile';

//everytime you do a pull, you update the path which is not done causes an error
//line 10 takes care of this error - $_SERVER['DOCUMENT_ROOT']....does the magic
//when you make a change to the database you export and email to your team mate who will import or copy paste into their sql tab
//for cloning to their gitHub. Always export so team will always import communicate these changes
//find config.phpFile in home, choose edit bcos we cannot edit in editor, we edit in cpanel home.


//prepared statements help prevent sql injection

//1. in pdo create a prepare statement by defining the query
$sql = "INSERT INTO pets(name, type, color)
        VALUES (:name, :type, :color)";

//2.prepare the statement and pass string that contains our $sql
/** @var DATABASE_NAME $db */
$statement = $db->prepare($sql); //returns an object called prepared statement

//3.bindParameters
//create variables for each data and use variable for placeholder
$name = 'Joey';
$type = 'kangaroo';
$color = 'white';
$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);


//another insert
$type = 'snake';
$name = 'Slither';
$color = 'green';

$statement->bindParam(':name', $name, PDO::PARAM_STR);
$statement->bindParam(':type', $type, PDO::PARAM_STR);
$statement->bindParam(':color', $color, PDO::PARAM_STR);
//execute the statement
//$statement->execute(); // everytime you refresh database, this is added to the table.html

//5/26/2022 class notes
////when doing update queries always use primary keys


//getting ID
$id = $db->lastInsertId();
echo "<p> snake added! ID: $id";

//Updating the query
//Define the query
$sql = "UPDATE pets SET name = :new 
        WHERE name = :old";

//prepare the state
$statement = $db->prepare($sql);

//Bind the parameters
$old = 'Joey';
$new = 'Troy';
$statement->bindParam(':old', $old, PDO::PARAM_STR);
$statement->bindParam(':new', $new, PDO::PARAM_STR);

//Execute
$statement->execute();
echo '<p>kangaroo updated!</p>';

//A delete query
//Define the query
$sql = "DELETE FROM pets WHERE id = :id";

//prepare the statement'
$statement = $db->prepare($sql);

//bind the paramenter
$id = 1;
$statement->bindParam(':id', $id, PDO::PARAM_INT);

//Execute
//$statement->execute();
echo "<p>pet $id deleted</p>";

//Define the query
$sql = "SELECT * FROM pets WHERE id = :id";

//prepare the statement
$statement = $db->prepare($sql);

//bind the parameters
$id = 3;
$statement->bindParam(':id', $id, PDO::PARAM_INT);

//execute the statement
$statement->execute();

//Process the result
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo $row['name'].", ".$row['type'].", ".$row['color'];

//SELECT Query getting multiple rows
//Define the query
$sql = "SELECT * FROM pets";

//Prepare the statement
$statement = $db->prepare($sql);

//Execute the statement
//$statement->execute();

//Process the result
/*
 * $name = $row['name'];
 * $type = $row['type'];
 * $color = $row['color'];
 */
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {
    echo "<p>" . $row['name'] . ", " . $row['type'] . ", " . $row['color'] . "</p>";
}


//try another select statement to retrieve multiple rows
//define the query
//$sql = "SELECT * FROM pets";



$sql="SELECT last, first FROM student";

//prepare the statement
$statement = $db->prepare($sql);

//Execute
$statement->execute();


$result = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<h1>Student List</h1>
        <ol>";
foreach($result as $row){
    echo "<li>".$row['last'].", ".$row['first']."</li>";
}
echo "</ol>";



//var_dump($_POST);

$sql="INSERT INTO student (sid, last, first)
VALUES (:sid, :last, :first)";

//prepare statement
$statement = $db->prepare($sql);

$sid = "12-34-5678";
$last = 'Ehirim';
$first = 'Chisom';

$statement->bindParam(':sid', $sid, PDO::PARAM_STR);
$statement->bindParam(':last', $last, PDO::PARAM_STR);
$statement->bindParam(':first', $first, PDO::PARAM_STR);

//execute
//$statement->execute();

echo "$first added<br>";

echo"<h1> Add new student</h1>
        <form method='POST' action='#'>
        <label>SID<input type='text'  name='sid'></label><br>
        <label>Last<input type='text'  name='last'></label><br>
        <label>First<input type='text'  name='first'></label><br>
        <label>Birthdate<input type='text'  name='birthdate'></label><br>
        <label>GPA<input type='text'  name='gpa'></label><br>
        <label>Advisor<input type='text'  name='advisor'></label><br>
        <button>Submit</button>
        
</form>";


$sql="INSERT INTO student (sid, last, first, birthdate, gpa, advisor)
VALUES (:sid, :last, :first, :birthdate, :gpa, :advisor)";

$sid = $_POST['sid'];
$last = $_POST['last'];
$first = $_POST['first'];
$birthdate = $_POST['birthdate'];
$gpa = $_POST['gpa'];
$advisor = $_POST['advisor'];

//prepare statement
$statement = $db->prepare($sql);

$statement->bindParam(':sid', $sid, PDO::PARAM_STR);
$statement->bindParam(':last', $last, PDO::PARAM_STR);
$statement->bindParam(':first', $first, PDO::PARAM_STR);
$statement->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
$statement->bindParam(':gpa', $gpa, PDO::PARAM_STR);
$statement->bindParam(':advisor', $advisor, PDO::PARAM_INT);

//execute
$statement->execute();

echo "$first $last Student added!";

