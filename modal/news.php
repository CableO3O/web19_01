<div class="cent">
    <h3>新增最新消息資料</h3>
    <hr>
</div>
    <form action="./api/add.php" method="post">
        <table>
            
            <tr>
                <td>新增最新消息資料:</td>
                <td>
                    <textarea name="text" id="" cols="30" rows="5"></textarea>
                </td>
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