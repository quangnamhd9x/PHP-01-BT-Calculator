<form method="post">
    <table>
        <tr>
            <td>First Number: </td>
            <td><input type="text" name="n1"></td>
        </tr>

        <tr>
            <td>Second Number: </td>
            <td><input type="text" name="n2"></td>
        </tr>

        <tr>
            <td>Select </td>
            <td><select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="                =                "></td>
        </tr>

    </table>
</form>

<?php
include "Calculator.php";
$cal = new calculator();
if(isset($_POST['submit']))
{
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
echo $result;
?>
