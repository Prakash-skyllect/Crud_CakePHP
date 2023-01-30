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
</head>
<body>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersignup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersignup->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Usersignup'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersignup form content">
            <?= $this->Form->create($usersignup) ?>
            <fieldset>
                <legend><?= __('Edit Usersignup') ?></legend>
                <?php
                echo $this->Form->control('name');
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</body>
</html>
