<?= $this->Html->docType() ?>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?= $this->Html->css('bootstrap\bootstrap.css') ?>

    <?= $this->Html->script('jquery\jquery.js') ?>
    <?= $this->Html->script('bootstrap\bootstrap.js') ?>

    <?= $this->Html->css('login.css') ?>

</head>

<body class="text-center">
    <div class="form-signin">

        <div class="container clearfix">

            <?= $this->fetch('main') ?>

        </div>

    </div>

</body>
</html>