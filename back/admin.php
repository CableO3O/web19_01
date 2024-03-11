<?php
$admins = $Admin->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="36%">帳號</td>
                    <td width="36%">密碼</td>
                    <td width="7%">刪除</td>
                </tr>
                <?php
                foreach ($admins as $admin) {
                ?>
                    <tr>
                        <td width="36%"><input style="width: 80%;" type="text" name="acc[]" id="" value="<?= $admin['acc']; ?>"></td>
                        <td width="36%"><input style="width: 80%;" type="text" name="pw[]" id="" value="<?= str_repeat("*",mb_strlen($admin['pw'])); ?>"></td>
                        <td width="7%"><input type="checkbox" name="del[]" value="<?= $admin['id']; ?>"></td>
                        <input type="hidden" name="table" value="<?=$do;?>">
                        <input type="hidden" name="id[]" value="<?= $admin['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增管理者帳號"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>