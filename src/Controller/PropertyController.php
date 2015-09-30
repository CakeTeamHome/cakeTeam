<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Model\Table\PropertyTable as PropertyTable;

class PropertyController extends AppController {

    public function index() {
        
    }

    public function state() {
       $this->loadModel('State');
      $data = $this->State->find();
      
      print_r($data); die;
    }

    public function addProperty($param) {
        
    }

}
