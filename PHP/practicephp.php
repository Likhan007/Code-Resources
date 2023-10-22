<!DOCTYPE html>
<html>
<body>

<?php
//----------------------VARIABLES AND PRINTING----------------------------------------
    // $var=24;
    // $var2=5;
    // $var3=$var+$var2;
    // echo "$var<br>";
    // echo "$var2<br>";
    // echo "$var3<br>";
    // echo $var+$var2;

    // $a="AMAR PRETTY ";
    // $b="MAM";
    // echo $a. "MOTU " .$b. ". MINE!!";

    //----------------------VARIABLES TYPE----------------------------------------

    // $a="HELLO"; // global variable

    // function task()
    // {
    //     $b="WORLD";
    //     // echo "THE GLOBAL VARIABLE IS : $a";    // THIS WILL QZ AN ERROR
    //     echo "THE GLOBAL VARIABLE IS : $b <br>";    

    //     global $a;
    //     echo "called global variable using global keyword $a <br>";
    // }
    // echo "THE GLOBAL VARIABLE IS : $a <br>";
    // task();


    //-----TRYING STATIC

    // $coun = 1;
    // function testfunc()
    // {   

    //     static $a = 100;    // doesn't get deleted
    //     $b = 100;           // gets deleted after the function closes

    //     echo "a = $a and b = $b <br>";
    //     $a=$a+100;
    //     $b=$b+100;
    // }

    // testfunc();
    // testfunc();
    // testfunc();

    //-----------CONNECTING DATABASE------------

    // Database connection parameters
    // $servername = "localhost"; // Change this to your database server
    // $username = "root"; // Change this to your database username
    // $password = ""; // Change this to your database password
    // $dbname = "halarpo";
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    
    // $sql = "SELECT id, name, sex FROM tb";
    // $result = $conn->query($sql);
    //     while ($row = $result->fetch_assoc()) {
    //         echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Sex: " . $row["sex"] . "<br>";
    //     }
    // $conn->close();


//--------------ECHO and PRINT---------------------------

// $var1 = "HELLO ";
// $var2 = "WORLD <br>";

// echo "<h2>".$var1."</h2>".$var2;

//  var_dump($var1)

// $var3 = array(1,2,3,4);
// echo $var3[0] , "<br>";
// print($var3[2])


//-----------------------------MATHEMATICS----------------------
// $a = 9;
// $b =-12.123;
// $v = array(5,4,32,5,4,52);

// echo min($v) . "<br>";                              
// echo max($v) . "<br>";                               
// echo abs($b). "<br>";   
// echo sqrt($a). "<br>";   
// echo round(0.2). "<br>";   
// echo round(0.5). "<br>";   
// echo rand(9,10) . "<br>";

//----------------------------DONT KNOW---------------------------

// define("HELLO",0);
// function sum(){
//     global $a,$b;
//     echo $a-$b . "<br>" ;
// }

// sum()


//----------------------------DAY 2......................
//----------------------------DAY 2......................
//----------------------------DAY 2......................
//----------------------------DAY 2......................
//----------------------------DAY 2......................
//----------------------------DAY 2......................

// function fun($Name){
//     echo "My Name is $Name <br>";
//     return 22;
// }
// $var = fun("Motu Mam");
// echo "My age is $var <br>";

// ---------------arrays and loops----------------------------

// $cars = array("Toyota" , "Volvo" , "Ferari");
// echo count($cars);
// echo "I like $cars[0] and $cars[1] and $cars[2]<br>";

// echo "I like $cars[0] ";
// foreach($cars as $c){
//     if($c == $cars[0])
//     {
//         continue;
//     }
//     echo "and $c ";
// }
// echo "<br>";


//---------------associative arrays------------------------------

                // Way 1

// $ar["one"]="HELLO";
// $ar["two"]="WORLD";
// echo "$ar[one] $ar[two] <br>";

//                 // Way 2

// $arr = array("one"=>"HELLO","two"=>"WORLD");
// echo "$ar[one] $ar[two] <br>";


//                 // looping through an associative array

// foreach($arr as $k => $v){
//     echo "$k is the key and it's value is $v<br>";
// }


//----------------------2D array-----------------------




// $table = array(
//     array("Item"=>"Rice","Rate"=>"20","Quantity"=>50,"Total Amount"=>1000),
//     array("Item"=>"Wheat","Rate"=>"25","Quantity"=>30,"Total Amount"=>750),
//     array("Item"=>"Oil","Rate"=>"200","Quantity"=>5,"Total Amount"=>1000),
//     array("Item"=>"Test","Rate"=>"123","Quantity"=>0,"Total Amount"=>246)
// );

// // printing each row of the table as a list using loop

// foreach($table as $row)
// {
//     echo "STARTING A ROW : <br>";
//     echo "<ul>";
//     foreach($row as $k => $v)
//     {
//         echo "<li> $v <br>";
//     }
//     echo "</ul>";
// }


//----------------------------------OOP-------------------------------
//----------------------------------OOP-------------------------------
//----------------------------------OOP-------------------------------
//----------------------------------OOP-------------------------------


//------------------------------------Class-Object-------------------

// class student{
//     public $Name;
//     public $Id;

//     function setintro($n , $i){
//         $this->Name = $n;
//         $this->Id = $i;
//     }

//     function getintro(){
//         echo "My name is $this->Name and my id is $this->Id <br>";
//     }
// }

// $likhan = new student;
// $sayone = new student;

// $likhan->setintro("LIKHAN",4243);
// $sayone->setintro("SAYONE",4289);

// $likhan->getintro();
// $sayone->getintro();

//-----------------------------------Class-Constructor---------------------------


// class student{
//     public $Name;
//     public $Id;

//     function __construct($n , $i){
//         $this->Name = $n;
//         $this->Id = $i;
//     }

//     function getintro(){
//         echo "My name is $this->Name and my id is $this->Id <br>";
//     }
// }

// $likhan = new student("LIKHAN",4243);       /// declaratiion er time ei execute hoye jay
// $sayone = new student("SAYONE",4289);       /// declaratiion er time ei execute hoye jay

// $likhan->getintro();
// $sayone->getintro();


//---------------------------PHP Date and Time------------------------------------

// date_default_timezone_set("Asia/Dhaka");        // setting timezone

// // DATE
// echo "Today is ".date("d-m-Y") . " and today is ".date("l")."<br>";

// echo "&copy 2010-".date("Y") . "<br>";

// // NOW TIME

// echo "Time is " . date("h : i : a" ) . "<br>";

// // Extracting date and time from string


// // $d=strtotime("10:30pm April 15 2014");
// $d=strtotime("");
// echo "Created date is " . date("Y-m-d h:i:sa", $d);
//-------------------------------------------Access modifiers--------------------------
// class fruit{
//     public $name = "NAME<br>";
//     protected $color="RONG<br>";
//     private $taste="SHAD<br>";

//     function something(){
//         echo "$this->name $this->color $this->taste";
//     }
// }

// $apple = new fruit();
// $mango = new fruit();

// echo $apple->name;

// echo $apple->something();


//------------------------Inheritance---------------------------------------------

// class edibles{
//     function __construct(){
//         echo "YOU CAN EAT ME <br>";
//     }
// }

// class fruits extends edibles{
//     function summery(){
//         echo "I'M A FRUIT<br>";
//     }
// }
// class veg extends edibles{
//     function summery(){
//         echo "I'M A VEGITABLE<br>";
//     }
// }

// $apple = new fruits();
// $apple->summery();
// $raddish = new veg();
// $raddish->summery();


//----------------------------------DATABASE-----------------------------------------

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "phpdb";
$conn = new mysqli($servername, $username , $password, $dbname);

///--------------before createing databse--------------------
// if(!$conn){  
    
//     die("Connection failes bitches<br>");
// }
// else{
//     echo "GG <br>";
// }
// // $conn->query("create database phpdb");
// ///--------------after createing databse (creating tables)--------------------

// $sql_command = "create table intro(id int(10) primary key, name varchar(50));";

// if($conn->query($sql_command)){
    
//     echo "failed to create table <br>";
// }
// else{
//     echo "CREATED TABLE SUCCESSFULLY <br>";
// }

// 

//----------------------------Inserting data-----------------------------------------

// $command = "insert into intro (id,name) values (1,'Likhan'),(2,'Samin'),(3,'Badhon');";


//----------------------------Multiple querries-----------------------------------------

// $command = "insert into intro (id,name) values (4,'test1');";
// $command .= "insert into intro (id,name) values (5,'test2');";
// $command  .= "insert into intro (id,name) values (6,'test3');";

// $conn->multi_query($command);

//--------------------------Prepared Statements------------------------------------------
//-------------------------------IMPORTANT-----------------------------------------------
//--------------------------Prepared Statements------------------------------------------

// $structure = $conn->prepare("insert into intro (id,name) values (?,?)");
// $structure->bind_param("is",$id,$name);

// $id=7;
// $name="binding1";
// $structure->execute();


//-------------------------------------SELECT---------------------------------------------

$command = "select id,name from intro where id in (select id from intro where id%2=0) order by id desc limit 2";

$result = $conn->query($command);

if($result->num_rows == 0){
    echo "THERE's NO DATA in THE DATABASE <br>";
}
else{
    while($row = $result->fetch_assoc()){
        echo "Id = " .$row["id"]. "     and     Name = " .$row["name"]. "<br>";
    }
}

// if($conn->query($command)){
//     echo "successful<br>";
// }
// else{
//     echo "not successful<br>";
// }

$conn->close();
?>



</body>
</html>