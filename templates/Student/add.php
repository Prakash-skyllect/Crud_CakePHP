<style>

 h1{
     text-align: center;
 }
 span{
     color: #ff5d5d;
 }
</style>

<h1>Add <span>Student Records</span></h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('name'); ?>
<?= $this->Form->control('address'); ?>
<label>Course</label>
<select name="course">
    <option>Select Course</option>
    <?php foreach ($course as $val): ?>
     <option value="<?=$val->cid?>"><?= $val->name ?></option>
    <?php endforeach;?>
</select>
<?= $this->Form->button('Submit') ?>
<?=$this->Form->end()?>
