<?php
function tCreate($result)
{
$rows = count($result);
$table = '<table id="table-id" class="tablesorter">';


$table .= '<thead><tr>';
$table .= '<th>'. 'Id' .'</th>';
$table .= '<th>'. 'Имя' .'</th>';
$table .= '<th>'. 'Урон' .'</th>';
$table .= '<th>'. 'Пробитие' .'</th>';
$table .= '<th>'. 'Скорость' .'</th>';
$table .= '</tr></thead>';

for ($tr=0; $tr<$rows; $tr++)
{
    $table .= '<tr>';
    $table .= '<td>'. $result[$tr]['id'] .'</td>';
    $table .= '<td>'. $result[$tr]['Name'] .'</td>';
    $table .= '<td>'. $result[$tr]['Damage'] .'</td>';
    $table .= '<td>'. $result[$tr]['Penetration power'] .'</td>';
    $table .= '<td>'. $result[$tr]['Speed'] .'</td>';
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;
}
?>