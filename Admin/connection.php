<?php
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'flour_mils';

/* End config */

$conn = new PDO('mysql:host='.$db_host.';
dbname='.$db_database, $db_user, $db_pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>