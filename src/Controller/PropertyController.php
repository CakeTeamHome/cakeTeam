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
        $this->layout = 'blank';
        $properties = $this->Property->find('all');
//        print_r($properties); die;
         $this->set(compact('properties',$properties));
    }

    public function state() {
       $this->loadModel('State');
      $data = $this->State->find();
      
      print_r($data); die;
    }

    public function add() {
        $this->layout = 'blank'; 
        $prop = $this->Property->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->data;
//            debug($data);
            $article = $this->Property->patchEntity($prop, $data );
            if ($this->Property->save($prop)) {
                $this->Flash->success(__('Your Property has been saved.'));
//                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Property.'));
        }
        $this->set('prop', $prop);
    }
    
    
    public function view($id) {
        $this->layout = 'blank';
        $prop_detail = $this->Property->get($id);
        $this->set('prop_detail', $prop_detail);
        
    }
    
    public function edit($param) {
        
    }

}
