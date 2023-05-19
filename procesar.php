<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento de formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h1>Procesamiento de formulario</h1>
        
        <?php if (count($_GET)) { ?>
            <h2>Variables GET</h2>
            <table class="table">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Valor</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_GET as $key => $value) { ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
        <?php if (count($_POST)) { ?>
            <h2>Variables POST</h2>
            <table class="table">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Valor</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_POST as $key => $value) { ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</body>
</html>