<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
    <title>Document</title>
</head>
<body>
<h1>Reset Password</h1>
<?=$this->Form->create() ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->control('newpass') ?>
<?= $this->Form->button('save') ?>
<?= $this->Form->end(); ?>
</body>
</html>

