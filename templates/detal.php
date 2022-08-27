<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Описание заявки</title>
    <link href="/css/my.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width">
</head>
<body>
<div class="container">
    <div class="row">
        <h2 class="col">Подробное содержание заявки</h2>
    </div>
    <dl class="row">
        <dt class="col-sm-3">Номер</dt>
        <dd class="col-sm-9"><?=$bid['id_bid']?></dd>

        <dt class="col-sm-3">Создана</dt>
        <dd class="col-sm-9"><?=$bid['dt_create']?></dd>

        <dt class="col-sm-3">ФИО</dt>
        <dd class="col-sm-9"><?=$bid['author']?></dd>

        <dt class="col-sm-3">Кабинет</dt>
        <dd class="col-sm-9"><?=$bid['cabinet']?></dd>

        <dt class="col-sm-3">Услуга</dt>
        <dd class="col-sm-9"><?=$bid['uname']?></dd>

        <dt class="col-sm-3">Описание</dt>
        <dd class="col-sm-9"><?=$bid['description']?></dd>

        <dt class="col-sm-3">Статус</dt>
        <dd class="col-sm-9">
            <?=$bid['sname']?><br>
            Изменить статус на: 
            <form method="post" action="">
                <select name="new_status" class="form-control" style="width: 200px" required>
                    <option value=""></option>
                    <?php foreach ($statuses as $status) { ?>
                        <option value="<?=$status['id_status']?>"><?=$status['name']?></option>
                    <?php } ?>
                </select>
                <button type="submit" class="btn btn-primary">Применить</button>
            </form>
        </dd>
    </dl>
</div>
</body>
</html>

