<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>

<body>
    <table border="2">
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>status</th>
        </tr>
        <?php foreach($curso as $curso): ?>
        <tr>
            <?php foreach($curso as $k=>$v): ?>
            <td><?=$v;?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>