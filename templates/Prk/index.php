<!-- print_r($massage); die(); -->

<?php echo $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<?= $this->Html->link("ADD",['action'=>'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

<?php foreach ($table as $val):?>
<tr>
    <td><?= $this->Html->link($val->id,['action'=>'view' , $val->id]) ?></td>
    <td><?= $val->name ?></td>
    <td><?= $val->email ?></td>
    <td><?= $this->Html->link("Edit" , ["action"=>'edit' , $val->id]) ?></td>
    <td><?= $this->Form->postlink('Delete',["action"=>'delete',$val->id],['confirm'=>'Sach me Karna Hai']) ?></td>
</tr>
<?php endforeach;?>

</table>
