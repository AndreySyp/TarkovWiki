<?php
$title = 'Tarkov Wiki';
$description = '';
$result = 'Неизвестная ошибка';
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/layouts/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/classes/CDataBase.php');
?>

<?php
$pas = $_POST['Pass'];
if ($pas == 'dada')
{
    $operation = $_POST['Operation'];
    $ammo =  $_POST['Ammo'];

    if ($operation=='add')
    {
        $name = $_POST['Name'];
        $dmg = $_POST['Damage'];
        $pen = $_POST['Penetration'];
        $speed = $_POST['Speed'];
        $CDataBase->addAmmo($ammo,$name,$dmg,$pen,$speed);
        $result = 'Операция успешна';
    }

    if ($operation=='del')
    {
        $id = $_POST['Id'];
        $CDataBase->DelAmmo($ammo,$id);
        $result = 'Операция успешна';
    }

}
else
    $result = 'Неверный пароль';
?>

<h1><?php echo $result;?></h1>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/tarkovWiki/layouts/footer.php');
?>