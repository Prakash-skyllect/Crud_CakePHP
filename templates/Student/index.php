

<?= $this->Html->link('Add',['action'=>'add']) ?>

<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>COURSE</th>
        <th>Actions</th>
        <th></th>
    </tr>

    <?php foreach ($show as $val):?>

    <tr>
        <td><?= $val->sid?></td>
        <td><?= $val->name?></td>
        <td><?= $val->address?></td>
        <td><?= $val->course?></td>
        <td><?= $this->Html->link('View' ,['action'=> 'view',$val->sid]) ?></td>
        <td><?= $this->Html->link('Edit' ,['action'=> 'edit',$val->sid , $val->course]) ?></td>
        <td><?= $this->Form->postlink('Delete' , ['action'=>'delete',$val->sid],['confirm' => "Sach Me Karna Hai?"]) ?></td>
    </tr>

    <?php endforeach;?>
</table>
