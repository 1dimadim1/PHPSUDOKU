<?php
$level = $_POST["level"];
$h = fopen("Fields.txt","r");
$arr = file ("Fields.txt");
fclose($h);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sudoku</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./index.js"></script>
</head>
<body>

<header>
    Судоку
</header>
<div class="container1">
    Выберите поле

    <table border="1" class="table1">
        <caption></caption>
        <?php
        foreach($arr as $i => $a)
        {
            echo "<tr>";
            for($z=0;$z<9;$z++){
                if(mb_substr($a, $z, 1)==0)
                    echo "<td>",mb_substr($a, $z, 1),"</td>";
                else
                    echo "<td style='unchangeable'>",mb_substr($a, $z, 1),"</td>";
            }
            echo "</tr>";
        }
   ?>
    </table>
    <table border="1" class="table2">
        <tr>
            <th>0</th>
        </tr>
        <tr>
            <th>1</th>
        </tr>
        <tr>
            <th>2</th>
        </tr>
        <tr>
            <th>3</th>
        </tr>
        <tr>
            <th>4</th>
        </tr>
        <tr>
            <th>5</th>
        </tr>
        <tr>
            <th>6</th>
        </tr>
        <tr>
            <th>7</th>
        </tr>
        <tr>
            <th>8</th>
        </tr>
        <tr>
            <th>9</th>
        </tr>
    </table>
</div>
<div class="container2">
    <form action="./update.php" method=POST>
        <input type="number" name="level" value="1" required>
        <button type="submit">Обновить</button>
    </form>
    <form action="Check.php" method=POST>
        <button type=submit>Проверить</button>
    </form>

</div>
<footer>Made by Dmitry Lis</footer>
</body>
</html>
