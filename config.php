<?php
/*this file contain detabase configation asumaing you are running mysql usering usesr root and apsward */
define('DB_SERVER' , 'localhost');
define('DB_USERNAME' , 'u348475756_shivam');
define('DB_PASSWORD' , '@Itisha8');
define('DB_NAME' , 'u348475756_userdetail');


$conn = mysqli_connect (DB_SERVER, DB_USERNAME , DB_PASSWORD , DB_NAME);

if ($conn == false) {
    dir('Error: cannot connect');
}


?>