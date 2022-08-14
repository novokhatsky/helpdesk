<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Список заявок</title>
    <link href="css/foundation.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <table>
        <tr>
            <th>Номер</th>
            <th>Cоздана</th>
            <th>ФИО</th>
            <th>Кабинет</th>
            <th>Статус</th>
        </tr>
        <tbody>
            <?php
                foreach ($bids as $bid) { ?>
                    <tr>
                        <td><?=$bid['id_bid']?></td>
                        <td><?=$bid['dt_create']?></td>
                        <td><?=$bid['author']?></td>
                        <td><?=$bid['cabinet']?></td>
                        <td><?=$bid['sname']?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

