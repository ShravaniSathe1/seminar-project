<?php
 $servername="localhost";
 $name= "root";
 $password="";
 $databasename="contact_db";

 $conn=mysqli_connect($servername,$name,$password,$databasename);
// now check the connection
 if(!$conn)
 {
 	die("Connection Failed:" . mysqli_connect_error());

 }

 if(isset($_POST['contact_submit']))
 	
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $message = $_POST['message'];
	 $sql_query = "INSERT INTO user_info (name,email,mobile,message)
    	 VALUES ('$name','$email','$mobile','$message')";

	 if (mysqli_query($conn, $sql_query)) 
 	 {
     		echo "Submited successfully ! <br> press back to see website again... ";
 } 
 	 else
      {
 		echo "Error " . $sql_query . mysqli_error($conn);
 	 }
 	 mysqli_close($conn);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  

?>