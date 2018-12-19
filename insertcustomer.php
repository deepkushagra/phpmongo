<?php
//echo "you are on the insert_customer.php file<br/>";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$email = $_POST['email'];

 // connect to mongodb
   $m = new MongoClient();
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->mydb;
   echo "Database mydb selected";
// create collection	
	$collection = $db->createCollection("mycol");
   echo "Collection created succsessfully";
   
   $document = array( 
      "fname" => $firstname, 
      "lname" => $lastname, 
	  );
	  
	$collection->insert($document);
   echo "Document inserted successfully";  
   

header("location: index.php");
?>