<?php
include_once "../api/db.php";
?>
<div class="cent">
<h3>編輯次選單</h3>
<hr>
</div>
<form action="./api/add_submenu.php" method="post">
    <table id="sub">
        
        <tr>
            <td>次選單名稱:</td>
            <td>次選單連結網址:</td>
            <td>刪除</td>
        </tr>
        <?php
        $DB=${ucfirst($_GET['table'])};
        $rows=$DB->all(['menu_id'=>$_GET['id']]);
        foreach ($rows as $row) {
            ?>
        <tr>
            <td><input type="text" name="name[]" value="<?=$row['name'];?>"></td>
            <td><input type="text" name="href[]" value="<?=$row['href'];?>"></td>
            <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
        </tr>
        <?php
}
        ?>
    </table>
    <table>
        <tr>
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="hidden" name="menu_id" value="<?=$_GET['id'];?>">
            <td><input type="submit" value="修改"></td>
            <td><input type="reset" value="重置"></td>
            <td><input type="button" value="更多次選單" onclick="more()"></td>
        </tr>
    </table>
</form>
<script>
    function more(){
        menu=
        `
        <tr>
            <td><input type="text" name="add_name[]"></td>
            <td><input type="text" name="add_href[]"></td>
        </tr>
        `
        $('#sub').append(menu);
    }
</script>