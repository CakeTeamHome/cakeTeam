<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo "<pre>";
//print_r($articles);
//die;

?>
<h1>Blog articles</h1>
<div><span><?= $this->Html->link('Add Article', ['action' => 'add']) ?></span></div>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link("Edit", ["action" => "edit/$article->id"]) ?> | <?= $this->Html->link("Delete", ["action" => "delete/$article->id"]) ?>
        </td>
        
    </tr>
    <?php endforeach; ?>
</table>

<?php 

// foreach ($articles as $key => $art) {
//   echo $art->id;
//    echo "<br>";
//    echo $art->title;
//} 

?>
