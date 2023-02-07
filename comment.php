<?php
 $servername="localhost";
 $name="root";
 $password="";
 $databasename="comment_db";

 $conn=mysqli_connect($servername,$name,$password,$databasename);
// now check the connection
 if(!$conn)
 {
 	die("Connection Failed:" . mysqli_connect_error());

 }

 if(isset($_POST['contact_submit']))
 	
      $name = $_POST['name'];
      $email = $_POST['email'];
      $comment = $_POST['comment'];
	 $sql_query = "INSERT INTO name_info (name,email,comment)
    	 VALUES ('$name','$email','$comment')";

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