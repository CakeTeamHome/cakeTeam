<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!--======= BANNER =========-->
  <div id="banner">
    <div class="flex-banner">
      <ul class="slides">
        <!--======= SLIDER =========-->
        <li> <?= $this->Html->image('slider-img-1.jpg'); ?> </li>
        
        <!--======= SLIDER =========-->
        <li> <?= $this->Html->image('slider-img-2.jpg'); ?> </li>
      </ul>
    </div>
    
    
    <!--======= FIND PROPERTY =========-->
    <div class="finder">
      <div class="container">
        <h1>Welcome to realtor</h1>
        
        <!--======= FORM SECTION =========-->
        <div class="find-sec">
          <ul class="row">
            
            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Choose The City</label>
              <select class="selectpicker">
                <option>New York</option>
                <option>Sydany</option>
                <option>Relish</option>
              </select>
            </li>
            
            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Location</label>
              <select class="selectpicker">
                <option>National parks</option>
                <option>State parks</option>
                <option>City parks</option>
              </select>
            </li>
            
            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Property Status</label>
              <select class="selectpicker">
                <option>Appartment</option>
                <option>House</option>
                <option>Villa</option>
                <option>Land</option>
              </select>
            </li>
            
            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>Property Type</label>
              <select class="selectpicker">
                <option>Choose</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </li>
            
            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>No of Bedrooms</label>
              <select class="selectpicker">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            
            <!--======= FORM =========-->
            <li class="col-sm-3">
              <label>No of Bathrooms</label>
              <select class="selectpicker">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            
            <!--======= Pricing Range =========-->
            <li class="col-sm-6">
              <div class="row">
                <div class="col-xs-9">
                  <div class="cost-price-content">
                    <label>Pricing Range: <span id="price-min" class="price-min"></span> <i>-</i> <span id="price-max" class="price-max"></span></label>
                    <div id="price-range" class="price-range"></div>
                  </div>
                </div>
                
                <!--======= BUTTON =========-->
                <div class="col-xs-3 search">
                  <button type="submit" class="btn">Search</button>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
