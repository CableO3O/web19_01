<?php
$news = $News->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">最新消息資料</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                </tr>
                <?php
                 $total = $News->count();
                 $div = 5;
                 $page = ceil($total / $div);
                 $now = $_GET['p'] ?? 1;
                 $start = ($now - 1) * $div;
                 $news = $News->all("limit $start,$div");
                foreach ($news as $new) {
                ?>
                    <tr>
                        <td width="68%">
                            <textarea name="text[]"  cols="70" rows="4"><?= $new['text']; ?></textarea>
                        </td>
                        <td><input type="checkbox" name="sh[]" value="<?= $new['id']; ?>" <?= ($new['sh'] == 1) ? 'checked' : ''; ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $new['id']; ?>"></td>
                        <input type="hidden" name="table" value="<?=$do;?>">
                        <input type="hidden" name="id[]" value="<?= $new['id']; ?>">
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="cent">
            <?php
            if ($now - 1 > 0) {
                $prev = $now - 1;
                echo "<a href='?do=$do&p=$prev'> < </a>";
            }
            for ($i = 1; $i <= $page; $i++) {
                $size = ($i == $now) ? 'font-size:24px' : 'font-size:16px';
                echo "<a href='?do=$do&p=$i' style='$size'>$i</a>";
            }
            if ($now + 1 <= $page) {
                $next = $now + 1;
                echo "<a href='?do=$do&p=$next'> > </a>";
            }
            ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增最新消息資料"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>