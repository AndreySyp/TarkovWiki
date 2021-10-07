<?php
$title = 'All ammo';
$description = 'Все патроны в таркове';
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/layouts/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/classes/CDataBase.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/function/tableCreate.php');
?>

<h1>Все патроны</h1>

<h2>О странице</h2><hr>
<div>
    Тут представлены все патроны, которые есть в игре(педставленны в базе данных).
</div>

<h2>Все патроны</h2><hr>
<div>
    <table class="tablesorter">
        <thead>
        <tr>
            <th>Калибры</th>
            <th>Оружие</th>
        </tr>
        </thead>
        <tr>
            <td><a  href="545Ammo.php">Патрон 5.45</a></td>
            <td>Ак-74, Ак-74М и т.д.</td>
        </tr>
        <tr>
            <td><a  href="556Ammo.php">Патроны 5.56</a></td>
            <td>M4A1 и HK416</td>
        </tr>
    </table>
</div>


<h2>Все патроны всех калибров</h2><hr>
<?php
$result = ($CDataBase->selectAllTwo('a545','a556'));
tCreate($result);
?>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/layouts/footer.php');
?>
