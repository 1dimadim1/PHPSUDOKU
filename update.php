<?php
$level = $_POST["level"];
$conn = new mysqli('localhost', 'root', '', 'sudoku');
$query = "SELECT `Field` FROM `fields` WHERE `ID`=$level";
$res = mysqli_query($conn, $query);
$resS =mysqli_fetch_row($res);
$arr=explode("
",$resS[0]);
if ($level <= 0 || $level > 12) {
    header("Location: ./index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sudoku</title>
    <link rel="stylesheet" href="./style.css">
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
    <script src="./index.js"></script>
</head>
<body>
<header>
    Судоку
</header>
<div class="container1">
    Уровень № <?php echo $level;?>
    <table border="1" class="table1" id="table1">
        <caption></caption>
        <?php
        foreach ($arr as $i => $a) {
            echo "<tr>";
            for ($z = 0; $z < 9; $z++) {
                if (mb_substr($a, $z, 1) == 0)
                    echo "<td>", mb_substr($a, $z, 1), "</td>";
                else
                    echo "<td style='background-color: #fffdd0;'>", mb_substr($a, $z, 1), "</td>";
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
        <button type="submit" class="button1">Обновить</button>
    </form>
    <button type=submit class="button2">Проверить</button>
</div>
<footer>Made by Dmitry Lis</footer>
</body>
</html>
