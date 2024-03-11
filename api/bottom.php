<?php include_once "db.php";
$_POST['id']=1;
$Bottom->save($_POST);
to("../back.php?do=bottom");