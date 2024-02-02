<div class="info" <?php  if (date('Y')-$s["Дата рождения"]<18) {?>style="background-color: red;" <?php }?>>
    <div>Пропуск в общагу</div>
    <div class="fio"><?php echo $s["ФИО"]?></div>
    <div class="birthday"><?php echo $s["Дата рождения"]?></div>
    <div class="year">Студенту: <?php echo date('Y')-$s["Дата рождения"] ?> лет</div>
</div>