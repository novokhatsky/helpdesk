<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Оформление заявки</title>
    <link href="css/foundation.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <form method="post">
        <div>
            <div>ФИО:</div>
            <div><input type="text" name="fio"></div>
        </div>
        <div>
            <div>Номер кабинета:</div>
            <div><input type="text" name="cabinet"></div>
        </div>
        <div>
            <div>Тип услуги:</div>
            <div>
                <select name="service">
                    <?php foreach ($service as $row) { ?>
                        <option value="<?=$row['id_service']?>"><?=$row['name']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div>
            <div>Описание технической проблемы:</div>
            <div>
                <textarea name="description"></textarea>
            </div>
        </div>
        <div>
            <input type="submit" value="Отправить">
        </div>
    </form>
</body>
</html>

