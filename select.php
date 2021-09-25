 <?php  
 //select.php  
 $connect = mysqli_connect("127.0.0.1:3306", "root", "", "ticket_booking");  
 $output = array();  

 $query = "SELECT * FROM society_tour";  
 
 
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      #we receive an array and we will convert it to json
      echo json_encode($output);  
 }  
 ?>  
