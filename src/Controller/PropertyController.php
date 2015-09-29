<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use App\Model\Table\PropertyTable as PropertyTable;

class PropertyController extends AppController {
    public function index(){
        
    }
    
    public function state(){
//        PropertyTable::getStates();
         $results = $this->query("select * from orders order by date");
         
         debug($results); die;
    }
    
    public function addProperty($param) {
        
    }
    

}
