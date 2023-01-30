
<?php echo $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<?= $this->Form->Create() ?>
<?= $this->Form->Control('name')?>
<?= $this->Form->Control('email')?>
<?= $this->Form->button('save')?>
<?= $this->Form->end(); ?>
