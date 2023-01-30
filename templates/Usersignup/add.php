<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usersignup $usersignup
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
    <style>
        button{
            background-color: rgb(37, 99, 235);
            border: none;
        }
        legend{
            text-align: center;
        }
        input {
            background-color: rgb(229, 231, 235) !important;
        }
        form {
            background-color: #fff;
        }
        label {
            font-size: 17px !important;
            font-weight: 700;
        }
        .log_btn{
            background-color: rgb(235, 37, 106);
            border: none;
            border-radius: 0.4rem;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 1.1rem;
            font-weight: 700;
            height: 3.8rem;
            letter-spacing: .1rem;
            line-height: 3.8rem;
            padding: 0 3rem;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            white-space: nowrap;
        }

    </style>
</head>
<body>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Usersignup'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersignup form content">
            <?= $this->Form->create($usersignup) ?>
            <fieldset>
                <legend><?= __('User Ragistration') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
           <a href="login" class="log_btn">Login</a>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</body>
</html>
