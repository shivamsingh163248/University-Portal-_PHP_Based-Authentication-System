<?php
/*this file contain detabase configation asumaing you are running mysql usering usesr root and apsward */
define('DB_SERVER' , 'localhost');
define('DB_USERNAME' , 'DATABASE_USER_NAME');
define('DB_PASSWORD' , 'FTP_DATA_PSW');
define('DB_NAME' , 'DATABSENAME');


$conn = mysqli_connect (DB_SERVER, DB_USERNAME , DB_PASSWORD , DB_NAME);

if ($conn == false) {
    dir('Error: cannot connect');
}


?>