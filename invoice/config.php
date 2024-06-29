<?php session_start();

define('DBNAME', 'invoice');
define('DBUSER','root');
define('DBPASS','');
define('DBHOST','localhost');

try{
    $db=new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
    //echo "Your page is connected with database succesfully..";
}catch(PDOException $e){
    echo "Issue->Connection failed". $e->getMessage();
}

?>