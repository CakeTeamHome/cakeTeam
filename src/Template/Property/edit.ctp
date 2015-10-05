<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>

<h1>Edit Property</h1>
<?php
    echo $this->Form->create($property);
    echo $this->Form->input('name');
    echo $this->Form->input('description', ['rows' => '3']);
    echo $this->Form->input('price');
    echo $this->Form->input('discount');
    echo $this->Form->input('images');
    echo $this->Form->input('city');
    echo $this->Form->input('locality');  
    echo $this->Form->input('type_id');
    echo $this->Form->input('subtype_id');
    echo $this->Form->button(__('Save Property'));
    echo $this->Form->end();
    ?>

