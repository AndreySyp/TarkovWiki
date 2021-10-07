<div>
    <h4>Добавить</h4>
    <form action="../pages/resultEdit.php" method="post">
        <input type="hidden" name="Operation" value="add">
        <input type="hidden" name="Ammo" value="<?php echo $ammo?>">

        <table class="tablesorter">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Урон</th>
                <th>Пробитие</th>
                <th>Скорость</th>
                <th>Пароль</th>
            </tr>
            </thead>
            <tr>
                <td><input name="Name" type="text"></td>
                <td><input name="Damage" type="number"></td>
                <td><input name="Penetration" type="number"></td>
                <td><input name="Speed" type="number"></td>
                <td><input name="Pass" type="password"></td>
            </tr>
        </table>

        <p><input type='submit' value='Отправить'></p>
    </form>

    <h4>Удалить</h4>
    <form action="../pages/resultEdit.php" method="post">
        <input type="hidden" name="Operation" value="del">
        <input type="hidden" name="Ammo" value="<?php echo $ammo?>">

        Id: <input name="Id" type="number">
        Пароль: <input name="Pass" type="password">
        <p><input type='submit' value='Отправить'></p>
    </form>
</div>