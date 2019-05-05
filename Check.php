<?php
if (isset($_POST['array'])) {
    $Field = $_POST['array'];
    foreach ($Field as $i => $a) {
        for ($z = 0; $z < 9; $z++) {
            if (mb_substr($a, $z, 1) == 0) {
                echo "Вы не закончили судоку";
                exit();
            }
        }
    }
    foreach ($Field as $i => $a) {
        for ($z = 0; $z < 9; $z++) {
            for ($c = $z + 1; $c < 9; $c++) {
                if (mb_substr($a, $z, 1) == mb_substr($a, $c, 1)) {
                            echo "Повторение в строчке № ".($i + 1)." (".$a.")";
                            exit();
                }
            }
        }
    }
    for ($i = 0; $i < 9; $i++) {
        for ($z = 0; $z < 9; $z++) {
            for ($c = $z + 1; $c < 9; $c++) {
                if (mb_substr($Field[$c], $i, 1) == mb_substr($Field[$z], $i, 1)) {
                            echo "Ошибка в столбце №  " . ($i + 1);
                            exit();
                }
            }
        }
    }
    $stay = 0;
    $stax = 0;
    $finy = 1;
    $finx = 1;
    for ($i = 0; $i < 9; $i++) {
        for ($y = $stay * 3; $y < $finy * 3; $y++) {
            for ($x = $stax * 3; $x < $finx * 3; $x++) {
                for ($y1 = $stay * 3; $y1 < $finy * 3; $y1++) {
                    for ($x1 = $stax * 3; $x1 < $finx * 3; $x1++) {
                        if (($x!=$x1 or $y!=$y1) and mb_substr($Field[$y], $x, 1) == mb_substr($Field[$y1], $x1, 1)) {
                            echo "Ошибка в квадрате № " . ($i + 1);
                            exit();
                        }
                    }
                }
            }
        }
        if ((($i + 1) % 3)== 0) {
            $stay++;
            $stax = 0;
            $finy++;
            $finx = 1;
        } else {
            $stax++;
            $finx++;
        }
    }
    echo "Вы победили!!!";
}
?>