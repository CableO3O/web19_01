<div class="cent">
    <h3>新增校園映像圖片</h3>
    <hr>
</div>
    <form action="./api/add.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>校園映像圖片:</td>
                <td><input type="file" name="img"></td>
            </tr>
        </table>
        <table>
            <tr>
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
                <td><input type="submit" value="新增"></td>
                <td><input type="reset" value="重置"></td>
            </tr>
        </table>
    </form>