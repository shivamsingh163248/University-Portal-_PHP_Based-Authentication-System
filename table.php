<?php 

// Include configuration file  
require ('config.php');

$user_name_this =  'shivamsinghr434163248@gmail.com'; 
 
//Select query 
$select = "SELECT * FROM vbspu WHERE username = 'shivamsinghr434163248@gmail.com' " ;
$result = $conn->query($select);
?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Employee Details</title> 
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head> 
<body> 
    <div class="container">
		<table class="table">
			<thead class="thead-light">
			<tr>
			  <th scope="col">Emp Name</th>
			  <th scope="col">Email</th>
			  <th scope="col">Phone</th>
			</tr>
			</thead>
			<tbody>
                         
                        <?php   
			// Loop the employee data
				echo '<table class="table table-bordered">';
				
					

                    if ($row = $result->fetch_object())
                   
                    
                    {
                        echo '<tr>'
                        .'<td>'.$row->yourname.'</td>'
                    
						
					
						.'</tr>';
                    }
				
				echo '</table>';
                        ?> 
			</tbody> 

			<p> this is the my name </p>
        </table> 
    </div> 
</body> 
</html> 