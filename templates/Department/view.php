<?php

//echo "<pre>";
//print_r($viewDep);die();
?>
<style>
    h1{
   text-align: center;
    }
    span{
        color: #d73e3e;
    }
    .sdt_details{
        width: 100%;
        height: 100px;
        padding: 10px;
        background-color: #e7e7e7;;
        border-radius: 8px;
    }

</style>
<h1>Student <span>Details</span></h1>
<div class="sdt_details">
    <label>ID:  <span><?= $viewed->cid ?></span></label>
    <label>Name:  <span><?= $viewed->name ?></span></label>
</div>
