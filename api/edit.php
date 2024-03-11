<?php
include_once "db.php";
$table = $_POST['table'];
unset($_POST['table']);
$DB = ${ucfirst($table)};
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $DB->del($id);
        } else {
            $row = $DB->find($id);
            if (isset($_POST['text'])) {
                $row['text'] = $_POST['text'][$key];
            }
            switch ($table) {
                case 'title':
                    $row['sh'] = (isset($_POST['sh']) && $id == $_POST['sh']) ? 1 : 0;
                    break;
                case 'ad':
                    $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                    break;
                case 'mvim':
                    $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                    break;
                case 'image':
                    $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                    break;
                case 'news':
                    $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
                    break;
            }
            $DB->save($row);
        }
    }
}
to("../back.php?do=$table");
