<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
  <!--======= TOP BAR =========-->
  <div class="top-bar">
    <div class="container">
      <ul class="left-bar-side">
        <li>
          <p><i class="fa fa-phone"></i> Call Us Now : +01 123 456 78 </p>
          <span>|</span> </li>
        <li>
          <p><i class="fa fa-envelope-o"></i> Info@ourinfomail.com </p>
          <span>|</span> </li>
        <li>
          <p><i class="fa fa-lock"></i> Login / Register </p>
          <span>|</span> </li>
      </ul>
      <ul class="right-bar-side social_icons">
        <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a></li>
        <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a></li>
        <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a></li>
        <li class="tumblr"> <a href="#."><i class="fa fa-tumblr"></i> </a></li>
      </ul>
    </div>
  </div>
  
  <!--======= HEADER =========-->
  <header class="sticky">
    <div class="container"> 
      
      <!--======= LOGO =========-->
<!--      <div class="logo"> <a href="#."><img src="images/logo.png" alt="" ></a> </div>-->
      <div class="logo"> <a href="#."><?= $this->Html->image('logo.png'); ?></a> </div>
      <!--======= NAV =========-->
      <nav> 
        
        <!--======= MENU START =========-->
        <ul class="ownmenu">
          <li class="active"><a href="index.html">Home</a>
            <ul class="dropdown">
              <li><a href="index.html">Home 1</a></li>
              <li><a href="02-Homepage-02.html">Home 2</a></li>
              <li><a href="03-Homepage-03.html">Home 3</a></li>
            </ul>
          </li>
          <li><a href="04-About-Us.html">About </a></li>
          <li><a href="05-Services.html">Services</a></li>
          <li><a href="07-Property-Listing.html">Properties</a></li>
          <li><a href="06-Our-Agents.html">our Team</a></li>
          <li><a href="09-Blog.html">Blog</a></li>
          <li><a href="13-Contact-Us.html">Contact us</a></li>
          <li><a href="index.html">Pages</a> 
            
            <!--======= MEGA MENU =========-->
            <div class="megamenu full-width">
              <h6>All Pages</h6>
              <div class="row nav-post">
                <div class="col-sm-4 boder-da-r">
                  <ul>
                    <li><a href="index.html">Home 1</a></li>
                    <li><a href="02-Homepage-02.html">Home 2</a></li>
                    <li><a href="03-Homepage-03.html">Home 3</a></li>
                    <li><a href="04-About-Us.html">About </a></li>
                    <li><a href="05-Services.html">Services</a></li>
                    <li><a href="06-Our-Agents.html">Our Agents</a></li>
                    <li><a href="07-Property-Listing.html">Properties List</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul>
                    <li><a href="07-Property-Listing.html">Properties List</a></li>
                    <li><a href="08-Property-Details.html">Properties Details</a></li>
                    <li><a href="09-Blog.html">Blog</a></li>
                    <li><a href="10-Single-Post.html">Blog Single</a></li>
                    <li><a href="11-Register.html">Register</a></li>
                    <li><a href="12-404.html">404</a></li>
                    <li><a href="13-Contact-Us.html">Contact us</a></li>
                  </ul>
                </div>
                <div class="col-sm-4"><?= $this->Html->image('nav-image.png'); ?> </div>
              </div>
            </div>
          </li>
        </ul>
        
        <!--======= SUBMIT COUPON =========-->
        <div class="sub-nav-co"> <a href="#."><i class="fa fa-search"></i></a> </div>
      </nav>
    </div>
  </header>