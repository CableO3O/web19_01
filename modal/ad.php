<div class="cent">
    <h3>新增動態文字廣告</h3>
    <hr>
</div>
    <form action="./api/add.php" method="post">
        <table>
            
            <tr>
                <td>新增動態文字廣告:</td>
                <td><input type="text" name="text"></td>
                <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            </tr>
        </table>
        <table>
            <tr>
                <td><input type="submit" value="新增"></td>
                <td><input type="reset" value="重置"></td>
            </tr>
        </table>
    </form>