<div class="cent">
    <h3>新增主選單</h3>
    <hr>
</div>
    <form action="./api/add.php" method="post">
        <table>
            <tr>
                <td>主選單名稱:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>選單連結地址:</td>
                <td><input type="text" name="href"></td>
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