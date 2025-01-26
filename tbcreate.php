<?php

include('dbconnect.php');   // include = calling back php codes form another page

$create_table = '
Create Table Customer
(
   CustomerID int Auto_Increment Primary Key,
   FirstName varchar(30),
   LastName varchar(30),
   Email varchar(50),
   DOB date,
   Gender varchar(20),
   Club varchar(30),
   Address varchar(100),
   Country varchar(50),
   Username varchar(30),
   Password varchar(50)


);';

$drop_table = 'Drop Table Customer';   // Delete table


$runquery = mysqli_query($connect,$create_table);   // can change any function like create, drop 
if(isset($runquery)){
    echo "Table Created.";
}
else{
    echo "Table creation fails.";
}

?>