
<?php

include 'index.php';




$username = $_POST['username'];
$username2 = $_POST['username2'];



$username ;
$username2 ;

echo '<table border = 1 cellpadding = 6 cellspacing = 0 align=center>';
echo '<tr bgcolor="black" style="color: white;">';
echo '<th style="background:white;"> </th>';




for ($i = 1; $username <= $i; $i++) {
    echo '<th>' . $i . '</th>';
}
echo '</tr>';
for ($i = 1; $i <= $username; $i++) {
    echo '<tr>';
    echo '<th bgcolor=black style="color: white;">' . $i . '</th>';

    for ($t = 1; $t <= $username2; $t++) {
        if ($i == $t) {
            $hasil = $i * $t;
            echo '<td align = center style="background:green;">' . $hasil . '</td>';
        } else {
            $hasil = $i * $t;
            echo '<td align = center>' . $hasil . '</td>';
        }
    }
    echo '<tr>';
}
echo '</table>';
?>