<?php
$mvims = $Mvim->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動畫圖片管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">動畫圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td width="23%"></td>
                </tr>
                <?php
                foreach ($mvims as $mvim) {
                ?>
                    <tr>
                        <td class="cent"><img style="width: 120px;height:100px" src="./img/<?= $mvim['img']; ?>" alt=""></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $mvim['id']; ?>" <?= ($mvim['sh'] == 1) ? 'checked' : ''; ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $mvim['id']; ?>"></td>
                        <td  class="cent"><input type="button" onclick="op('#cover','#cvr','./modal/update.php?table=<?=$do;?>&&id=<?= $mvim['id']; ?>')" value="更換動畫"></td>
                        <input type="hidden" name="table" value="<?=$do;?>">
                        <input type="hidden" name="id[]" value="<?= $mvim['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增動畫圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>