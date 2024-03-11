<?php
include_once "db.php";
$table = $_POST['table'];
unset($_POST['table']);
$DB = ${ucfirst($table)};
if (isset($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], '../img/' . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
switch ($table) {
    case 'title':
        $_POST['sh'] = 0;
        break;

    case 'ad':
        $_POST['sh'] = 1;
        break;
    case 'mvim':
        $_POST['sh'] = 1;
        break;
    case 'image':
        $_POST['sh'] = 1;
        break;
    case 'news':
        $_POST['sh'] = 1;
        break;
    case 'menu':
        $_POST['sh'] = 1;
        break;
}
if (isset($_POST['pw2'])) {
    unset($_POST['pw2']);
}
if (isset($_POST['href'])) {
    $_POST['menu_id']=0;
}
$DB->save($_POST);
to("../back.php?do=$table");
