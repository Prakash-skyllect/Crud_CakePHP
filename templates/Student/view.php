<?php
//echo  "<pre>";
//print_r($view);die();
?>
<style>
    h1{
        text-align: center;
    }
    span{
        color: #f84a4a;
    }
    .std_details{
         width: 100%;
        background-color: lightgray;
        border-radius: 8px;
        padding: 10px;
    }
    label{
        color: #4b4b4b;
    }

</style>
 <h1>Student <span>Details</span></h1>
<div class="std_details">
    <label>Student Id: <?= $view->sid?></label>
    <label>Name: <?= $view->name?></label>
    <label>Address: <?= $view->address?></label>
    <label>Course Id: <?= $view->course?></label>
    <label>Course Name: <?= $view->department->name?></label>

</div>
