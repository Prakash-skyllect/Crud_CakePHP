<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $user
 */
?>
<div class="user index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('User') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('Role') ?></th>
                    <th><?= $this->Paginator->sort('type_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $val):?>
                <tr>
                    <td><?= $this->Number->format($val->id) ?></td>
                    <td><?= h($val->name) ?></td>
                    <td><?= h($val->address) ?></td>
                    <td><?= h($val->email) ?></td>
                    <td><?= h($val->type->name) ?></td>
                    <td><?= $val->type_id === null ? 'user' : $this->Number->format($val->type_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $val->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $val->id ,$val->type_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $val->id], ['confirm' => __('Are you sure you want to delete # {0}?', $val->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

