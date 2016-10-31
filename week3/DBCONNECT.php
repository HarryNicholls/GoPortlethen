<?php
/**]
 * Created by PhpStorm.
 * User: 1405741
 * Date: 17/10/2016
 * Time: 14:54
 */

define('DB_server','eu-cdbr-azure-west-a.cloudapp.net');
define('DB_PASSWORD','da3cf16e');
define('DB_USERNAME','bd5082fe0b7b9d');
define('DB_DATABASE','1405741db');

//connect to server and select database
$DB = mysqli_connect(DB_SERVER,
                    DB_USERNAME,
                    DB_PASSWORD,
                    DB_DATABASE);

//test if connection was established. and pring any errors
if($db->connect_error){
    die('Connectionfailed['.$db->connect_error.']');
}

//create a SQL query as a string 

$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '% laser %' ";

//execute the sql query 

$result = $db->query($sql_query);

//iterate over $result object ome $row at a time 
//use fetch_array() to return an associative array
While($row = $result->fetch_array()){
    //print out fields from row of data
    echo "<p>".$row['superheroName']."</p>";
}

$result->close();
 $DB->close();
//close connection to database

