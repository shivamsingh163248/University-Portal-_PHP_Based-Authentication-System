<?php
/*this file contain detabase configation asumaing you are running mysql usering usesr root and apsward */
define('DB_SERVER' , 'localhost');
define('DB_USERNAME' , 'root');
define('DB_PASSWORD' , '');
define('DB_NAME' , 'login');


$conn = mysqli_connect (DB_SERVER, DB_USERNAME , DB_PASSWORD , DB_NAME);

if ($conn == false) {
    dir('Error: cannot connect');
}


?>