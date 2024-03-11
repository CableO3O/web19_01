<div class="cent">
    <?php
    switch ($_GET['table']) {
        case 'title':
            echo "<h3>更換標題區圖片</h3>";
            break;
        case 'image':
            echo "<h3>更換校園映像圖片</h3>";
            break;

        case 'mvim':
            echo "<h3>更換動畫圖片</h3>";
            break;
    }
    ?>
    <hr>
</div>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <?php
            switch ($_GET['table']) {
                case 'title':
                    echo "<td>標題區圖片:</td>";
                    break;

                case 'mvim':
                    echo "<td>動畫圖片:</td>";
                    break;
                case 'image':
                    echo "<td>校園映像圖片:</td>";
                    break;
            }
            ?>

            <td><input type="file" name="img"></td>
        </tr>
    </table>
    <table>
        <tr>
            <input type="hidden" name="table" value="<?= $_GET['table']; ?>">            
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            <td><input type="submit" value="更換"></td>
            <td><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>