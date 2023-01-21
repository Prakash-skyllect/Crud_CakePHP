<style>
    h1{
        text-align: center;
    }
    span{
        color: #ba4343;
    }

</style>

<h1>Update <span>Student Records</span></h1>

<?= $this->Form->create($edit) ?>
<?= $this->Form->control('name') ?>
<?= $this->Form->control('address') ?>
<label>Course</label>
<select name="course">
    <option value="<?= $edit->course ?>"> <?= $edit->department->name?></option>
    <?php  foreach ($course as  $val): ?>
    <option value="<?=$val->cid?>"><?= $val->name ?></option>
    <?php  endforeach; ?>
</select>
<?= $this->Form->button("Update") ?>
<?=$this->Form->end() ?>
