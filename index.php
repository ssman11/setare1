<?php
if (isset($_POST['submit'])) {
    $num = $_POST['n1'];
    for ($a = 1; $a <= $num; $a++){
        for ($j=$num-$a;$j>=1; $j--){
            echo '&nbsp';
        }
        for ($b =1;$b<=$a;$b++){
            echo "* ";
        }
        echo "<br>";
    }
}
?>
<form method="post">
    <label>عددی برای مشخص کردن تعداد مثلث ها</label><br>
    <input type="number" name="n1"/><br>
    <input type="submit" name="submit" value="run"/>
</form>
