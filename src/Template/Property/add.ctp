<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//App::import('Controller', 'Property');
//$EmpCont = new PropertyController;
//$department_id = 4 ; // put here department ID as per your need
//$employee_list = $EmpCont -> get_employee_list($department_id );


?>
<div>
    <h1>Add Property</h1>
<?php
    echo $this->Form->create($prop);
    echo $this->Form->input('name');
    echo $this->Form->input('price');
    echo $this->Form->input('discount');
    echo $this->Form->input('locality');
    echo "Select City".$this->Form->select(
    'city',
    [1, 2, 3, 4, 5],
    ['empty' => '(choose one)']
);
    echo $this->Form->input('description', ['rows' => '3']);
    ?>
    <h3>Other Amenities</h3>
    
    <?php
        echo "<label>Swimming pool</label>".$this->Form->checkbox('published');
        echo "<label>Garden</label>".$this->Form->checkbox('garden');
        echo "<label>Lift</label>".$this->Form->checkbox('lift');
        echo "<label>Shopping Complex</label>".$this->Form->checkbox('shopping');
        echo "<label>Parking</label>".$this->Form->checkbox('parking');
        echo "<br>";
    echo $this->Form->button(__('Save'));
    echo $this->Form->end();
?>

</div>