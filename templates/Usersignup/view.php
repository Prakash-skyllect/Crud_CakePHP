<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usersignup $usersignup
 */

?>
<?php echo $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usersignup'), ['action' => 'edit', $usersignup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usersignup'), ['action' => 'delete', $usersignup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersignup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usersignup'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usersignup'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersignup view content">
            <h3><?= h($usersignup->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($usersignup->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($usersignup->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usersignup->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($usersignup->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($usersignup->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
