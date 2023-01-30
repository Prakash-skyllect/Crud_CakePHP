<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
    <title>Document</title>
    <style>
        body{
            background-color: white;
        }
        button{
            background-color: #e5ee5a;
            color: black;
            border: none;
        }
        button:hover{
            background-color: lightpink;
            color: black;
        }
        .message.warning {
            background: #abe2f3;
            color: #000000;
            border-color: #1d89ea;
        }
    </style>
</head>
<body>
<h1>Forget Password</h1>
<?= $this->Form->Create()?>
<?= $this->Form->Control('email',['placeholder'=>'Enter Email']); ?>
<?= $this->Form->button('save'); ?>
<?= $this->Form->end(); ?>
</body>
</html>
