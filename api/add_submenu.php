<?php
include_once "db.php";
$table = $_POST['table'];
unset($_POST['table']);
$DB = ${ucfirst($table)};
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id){
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $DB->del($id);
        }else{
            $row=$DB->find($id);
            $row['name']=$_POST['name'][$key];
            $row['href']=$_POST['href'][$key];
            $DB->save($row);
        } 
    }
}
if (isset($_POST['add_name'])) {
    foreach ($_POST['add_name'] as $key => $value) {
        $data=[];
        $data['name']=$value;
        $data['href']=$_POST['add_href'][$key];
        $data['menu_id']=$_POST['menu_id'];
        $data['sh']=1;
        $DB->save($data);
    }
}
to("../back.php?do=menu");