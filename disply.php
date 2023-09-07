<?php 

// Include configuration file  
require ('config.php');

$user_name_this =  $_SESSION['username']; 


 
//Select query 
$select = "SELECT * FROM vbspu WHERE username  = '$user_name_this' " ;
$result = $conn->query($select);
?> 




<?php   
			// Loop the employee data
				echo "this is the print name ";
					

                    if ($row = $result->fetch_object())
                   
                    
                    {
                        echo $row->yourname ;
      
                    }
?>
