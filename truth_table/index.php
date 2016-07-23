<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

#&&

echo '<table>';
echo '<thead>';
    echo '<tr>';
        echo '<th>X</th>';
        echo '<th>Y</th>';
        echo '<th>&&</th>';
    echo '</tr>';
echo '</thead>';

echo '<tr>';
    echo '<td>';
        echo '0';
    echo '</td>';
    echo '<td>';
        echo '0';
    echo '</td>';
    echo '<td>';
        var_dump(0&&0);
    echo '</td>';
echo '</tr>';
echo '<tr>';
    echo '<td>';
        echo '0';
    echo '</td>';
    echo '<td>';
        echo '1';
    echo '</td>';
    echo '<td>';
        var_dump(0&&1);
    echo '</td>';
echo '</tr>';
echo '<tr>';
    echo '<td>';
        echo '1';
    echo '</td>';
    echo '<td>';
        echo '1';
    echo '</td>';
    echo '<td>';
        var_dump(1&&1);
    echo '</td>';
echo '</tr>';

echo '</table>';


#||

echo '<table>';
echo '<thead>';
    echo '<tr>';
        echo '<th>X</th>';
        echo '<th>Y</th>';
        echo '<th>||</th>';
    echo '</tr>';
echo '</thead>';

echo '<tr>';
    echo '<td>';
        echo '0';
    echo '</td>';
    echo '<td>';
        echo '0';
    echo '</td>';
    echo '<td>';
        var_dump(0||0);
    echo '</td>';
echo '</tr>';
echo '<tr>';
    echo '<td>';
        echo '0';
    echo '</td>';
    echo '<td>';
        echo '1';
    echo '</td>';
    echo '<td>';
        var_dump(0||1);
    echo '</td>';
echo '</tr>';
echo '<tr>';
    echo '<td>';
        echo '1';
    echo '</td>';
    echo '<td>';
        echo '1';
    echo '</td>';
    echo '<td>';
        var_dump(1||1);
    echo '</td>';
echo '</tr>';

echo '</table>';




#xor

echo '<table>';
echo '<thead>';
    echo '<tr>';
        echo '<th>X</th>';
        echo '<th>Y</th>';
        echo '<th>XOR</th>';
    echo '</tr>';
echo '</thead>';

echo '<tr>';
    echo '<td>';
        echo '0';
    echo '</td>';
    echo '<td>';
        echo '0';
    echo '</td>';
    echo '<td>';
        var_dump(0 xor 0);
    echo '</td>';
echo '</tr>';
echo '<tr>';
    echo '<td>';
        echo '0';
    echo '</td>';
    echo '<td>';
        echo '1';
    echo '</td>';
    echo '<td>';
        var_dump(0 xor 1);
    echo '</td>';
echo '</tr>';
echo '<tr>';
    echo '<td>';
        echo '1';
    echo '</td>';
    echo '<td>';
        echo '1';
    echo '</td>';
    echo '<td>';
        var_dump(1 xor 1);
    echo '</td>';
echo '</tr>';

echo '</table>';
?>
</body>
</html>

