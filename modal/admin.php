<div class="cent">
    <h3>新增管理者帳號</h3>
    <hr>
</div>
    <form action="./api/add.php" method="post">
        <table>
            <tr>
                <td>帳號:</td>
                <td><input type="text" name="acc"></td>
            </tr>
            <tr>
                <td>密碼:</td>
                <td><input type="password" name="pw"></td>
            </tr>
            <tr>
                <td>確認密碼:</td>
                <td><input type="password" name="pw2"></td>
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