<?php
$ads = $Ad->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動態文字廣告管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">動態文字廣告</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                </tr>
                <?php
                foreach ($ads as $ad) {
                ?>
                    <tr>
                        <td width="68%"><input style="width: 80%;" type="text" name="text[]" id="" value="<?= $ad['text']; ?>"></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $ad['id']; ?>" <?= ($ad['sh'] == 1) ? 'checked' : ''; ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $ad['id']; ?>"></td>
                        <input type="hidden" name="table" value="<?=$do;?>">
                        <input type="hidden" name="id[]" value="<?= $ad['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增動態文字廣告"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>