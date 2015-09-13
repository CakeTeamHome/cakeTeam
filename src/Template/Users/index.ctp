<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1>Users</h1>
<div><span><?= $this->Html->link('Add User', ['action' => 'add']) ?></span></div>
<table>
    <tr>
        <th>Id</th>
        <th>UserName</th>
        <th>Password</th>
        <th>Role</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($users as $val): ?>
    <tr>
        <td><?= $val->id ?></td>
        <td>
            <?= $val->username; ?>
        </td>
        <td>
            <?= $val->password; ?>
        </td>
        <td>
            <?= $val->role; ?>
        </td>
        <td>
            <?= $this->Html->link("Edit", ["action" => "edit/$val->id"]) ?> | <?= $this->Html->link("Delete", ["action" => "delete/$val->id"]) ?>
        </td>
        
    </tr>
    <?php endforeach; ?>
</table>



