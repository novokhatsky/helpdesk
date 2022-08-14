<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Оформление заявки</title>
    <link href="css/my.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label for="fio">ФИО:</label>
                    <div><input type="text" name="fio" id="fio" class="form-control" required></div>
                </div>
                <div class="form-group">
                    <label for="cabinet">Номер кабинета:</label>
                    <div><input type="text" name="cabinet" id="cabinet" class="form-control" required></div>
                </div>
                <div class="form-group">
                    <div>Тип услуги:</div>
                    <div>
                        <select name="id_service" class="form-control" required>
                            <option value="">выберите тип заявки</option>
                            <?php foreach ($service as $row) { ?>
                                <option value="<?=$row['id_service']?>"><?=$row['name']?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Описание технической проблемы:</label>
                    <textarea name="description" id="description" class="form-control" row="5" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>

</body>
</html>
