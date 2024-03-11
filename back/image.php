<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">校園映像資料圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td width="23%"></td>
                </tr>
                <?php
                $total = $Image->count();
                $div = 3;
                $page = ceil($total / $div);
                $now = $_GET['p'] ?? 1;
                $start = ($now - 1) * $div;
                $images = $Image->all("limit $start,$div");
                foreach ($images as $image) {
                ?>
                    <tr>
                        <td class="cent"><img style="width: 100px;height:68px" src="./img/<?= $image['img']; ?>" alt=""></td>
                        <td><input type="checkbox" name="sh[]" value="<?= $image['id']; ?>" <?= ($image['sh'] == 1) ? 'checked' : ''; ?>></td>
                        <td><input type="checkbox" name="del[]" value="<?= $image['id']; ?>"></td>
                        <td class="cent"><input type="button" onclick="op('#cover','#cvr','./modal/update.php?table=<?= $do; ?>&&id=<?= $image['id']; ?>')" value="更換圖片"></td>
                        <input type="hidden" name="table" value="<?= $do; ?>">
                        <input type="hidden" name="id[]" value="<?= $image['id']; ?>">
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增校園映像圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>