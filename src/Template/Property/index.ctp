<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>

<table border="1" width="700px">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Discount</th>
        <th>City</th>
        <th>Locality</th>
        <th>Property Type</th>
        <th>Property Sub Type</th>
        <th>Actions</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($properties as $property): ?>
    <tr>
        <td><?= $property->id ?></td>
        <td>
            <?= $this->Html->link($property->name, ['action' => 'view', $property->id]) ?>
        </td>
        <td><?= $property->description ?></td>
        <td><?= $property->price ?></td>
        <td><?= $property->discount ?></td>
        <td><?= $property->city ?></td>
        <td><?= $property->locality ?></td>
        <td><?= $property->type_id ?></td>
        <td><?= $property->subtype_id ?></td>
        
        <td>
            <?= $this->Html->link("Edit", ["action" => "edit/$property->id"]) ?> | <?= $this->Html->link("Delete", ["action" => "delete/$property->id"]) ?>
        </td>

    </tr>
    <?php endforeach; ?>
</table>