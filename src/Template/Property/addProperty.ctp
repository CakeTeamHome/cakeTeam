<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div>
    <h1>Add Property</h1>
<?php
    echo $this->Form->create($property);
    echo $this->Form->input('name');
    echo $this->Form->input('price');
    echo $this->Form->input('discount');
    echo $this->Form->input('locality');
    echo $this->Form->select(
    'city',
    [1, 2, 3, 4, 5],
    ['empty' => '(choose one)']
);
    echo $this->Form->checkbox('published', ['hiddenField' => false]);
    echo $this->Form->input('description', ['rows' => '3']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>

</div>