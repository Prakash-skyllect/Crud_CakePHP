<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Usersignup> $usersignup
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
<style>
    .button{
        background-color: #3c85d3 !important;
        border: none;
    }

</style>
<body>
<div class="usersignup index content">
    <?= $this->Html->link(__('New Usersignup'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usersignup') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($usersignup as $usersignup): ?>
                <tr>
                    <td><?= $this->Number->format($usersignup->id) ?></td>
                    <td><?= h($usersignup->name) ?></td>
                    <td><?= h($usersignup->email) ?></td>
                    <td><?= h($usersignup->created) ?></td>
                    <td><?= h($usersignup->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usersignup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersignup->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersignup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersignup->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
</body>
</html>
