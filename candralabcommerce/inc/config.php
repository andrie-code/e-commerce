<?php
/* Candralab Ecommerce v2.0
 * http://www.candra.web.id/
 * Candra adi putra <candraadiputra@gmail.com>
 * last edit: 15 okt 2013
 */?>
 
<?php	
	define('db_host','localhost');
	define('db_user','root');
	define('db_pass','labadmin');
	define('db_name','candralabcommercedb');
	
	$connection = mysqli_connect(db_host,db_user,db_pass,db_name);
	mysqli_select_db($connection, db_name);
	
?>
