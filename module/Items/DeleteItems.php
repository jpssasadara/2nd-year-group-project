<?php  
 //delete.php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $id = mysqli_real_escape_string($connect, $data->id);  
      $query = "DELETE FROM Items WHERE Code='$id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Deleted....";  
      }  
      else  
      {  
           echo 'Error';  
      }

      // <<<<<<<<<<<<<<<<<<<<<<<<<<for net Amount >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        $deleteQueryNet= "DELETE FROM  stores WHERE Code='$id'";
        mysqli_query($connect, $deleteQueryNet);
       //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>    
 }  
 ?>  