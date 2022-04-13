<?php 
include 'db_connect.php';
$application = $conn->query("SELECT  a.*,v.position FROM application a inner join vacancy v on v.id = a.position_id where a.id=".$_GET['id'])->fetch_array();
foreach($application as $k => $v){
	$$k = $v;
}
       $fname = explode('_',$resume_path);
       unset($fname[0]);
       $fname = implode("",$fname);

       echo $email;

       require_once 'sendApplicationVerificationEmail.php';




?>
