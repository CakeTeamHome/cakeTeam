<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;
use Cake\ORM\Table;

class StateTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
    
    
    public static function getStates(){
     $properties = $this->State->find('all');
        print_r($properties); die;
//         $this->set(compact('properties'));   
    }
    
}
