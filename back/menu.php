<?php
$menus = $Menu->all(["menu_id"=>0]);
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="30%">主選單名稱</td>
                    <td width="30%">選單連結位址</td>
                    <td width="15%">次選單數量</td>
                    <td width="10%">顯示</td>
                    <td width="7%">刪除</td>
                    <td ></td>
                </tr>
                <?php
                foreach ($menus as $menu) {
                ?>
                    <tr>
                        <td width="30%"><input style="width: 80%;" type="text" name="name[]" id="" value="<?= $menu['name']; ?>"></td>
                        <td width="30%"><input style="width: 80%;" type="text" name="href[]" id="" value="<?=$menu['href']; ?>"></td>
                        <td width="15%"><?=$Menu->count(["menu_id"=>$menu['id']]);?></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $menu['id']; ?>" <?= ($menu['sh'] == 1) ? 'checked' : ''; ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $menu['id']; ?>"></td>
                        <td><input type="button" value="編輯次選單" onclick="op('#cover','#cvr','./modal/edit_menu.php?table=<?= $do; ?>&&id=<?= $menu['id']; ?>')" ></td>
                        <input type="hidden" name="table" value="<?=$do;?>">
                        <input type="hidden" name="id[]" value="<?= $menu['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增主選單"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>