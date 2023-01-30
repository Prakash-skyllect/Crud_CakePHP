<?= $this->Html->link('Add' ,["action" => 'add']) ?>

<style>
    .new{
        display: flex;
        gap: 10px;
    }

</style>
<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($showDep as $val):?>
        <tr>
            <td><?= $val->cid?></td>
            <td><?= $val->name?></td>
            <td class="new"><?= $this->Html->link('View' ,['action'=> 'view',$val->cid]) ?>
            <?= $this->Html->link('Edit' ,['action'=> 'edit',$val->cid]) ?>
            <?= $this->Html->link('delete',['action' => 'delete',$val->cid]) ?></td>
        </tr>

    <?php endforeach;?>
</table>
