<?php include_once "db.php";
$_POST['id']=2;
$Total->save($_POST);
to("../back.php?do=total");