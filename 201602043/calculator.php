<?php
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
                return $this->a + $this->b;
                break;

            case '-':
                return $this->a - $this->b;
                break;

            case '*':
                return $this->a * $this->b;
                break;

            case '/':
                return $this->a / $this->b;
                break;

            default:
                return "Sorry No command found";
        }
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}
$cal = new calculator();
if(isset($_POST['submit']))
{
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}

?>

<form method="post">
    <table align="center">
        <tr>
            <td><input type="text" name="n1"></td>
            <td style="text-align:center;">
            <select name="op" style="vertical-align: middle; text-align-last: center">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            </td>
            <td><input type="text" name="n2"></td>
            <td><input type="submit" name="submit" value="="></td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td style="font-size: 300px;"><strong><?php echo $result; ?><strong></td>
        </tr>
    </table>
</form>
