<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

//print_r($type);die();

//foreach ($type as $val){
//    print_r($val->name);
//};die();

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List User'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="user form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?=  $this->Form->control('name');?>
                <?=  $this->Form->control('address'); ?>
                <?=  $this->Form->control('email'); ?>
                <label>Type:</label>
                <select name="type_id" id="type-id" >
                    <option>Select Role</option>
                    <?php foreach ($type as $val): ?>
                        <option value="<?= $val->id ?>"><?= $val->name?></option>
                   <?php endforeach; ?>
                </select>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>



